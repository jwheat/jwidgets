using System;
using System.Collections.Generic;
using System.Data;
using Jadu.Web.API;

// Latest News Items Widget

public partial class LatestNewsWidget : Jadu.Web.FrontEnd.HomepageWidget
{
    private int newsItemsToShow = 1;

    protected void Page_Load(object sender, EventArgs e)
    {
		List<News> allNews = new List<News>();
		News topNews = this.Factory.JaduNewsGlobals.GetTopNews(true, true);

		if (topNews == null || (topNews != null && this.newsItemsToShow > 1)) {
			allNews = new List<News>(this.Factory.JaduNewsGlobals.GetAllNewsByDate(true, true));
		}

        //Create a DataTable that will hold news details to be assigned to the widget control
        DataSet newsDataSet = new DataSet();
        DataTable newsTable = newsDataSet.Tables.Add("top3News");

        //Create columns for the table
		newsTable.Columns.Add("newsID", Type.GetType("System.String"));
		newsTable.Columns.Add("newsTitle", Type.GetType("System.String"));
		newsTable.Columns.Add("newsURL", Type.GetType("System.String"));
        newsTable.Columns.Add("newsSummary", Type.GetType("System.String"));

        //Add the latest new item to the data table first if it exists
        if (topNews != null) {
                DataRow row = newsTable.NewRow();
                row["newsID"] = topNews.Id;
				row["newsTitle"] = this.encodeHtml(topNews.Title);
				row["newsURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildNewsArticleURL(topNews.Id, true, topNews.Title);
				row["newsSummary"] = this.encodeHtml(topNews.Summary);
                newsTable.Rows.Add(row);
        }

		if (newsTable.Rows.Count < this.newsItemsToShow) {

			foreach (News news in allNews) {
				if (topNews == null || (topNews != null && news.Id != topNews.Id)) {

					DataRow row = newsTable.NewRow();
					row["newsID"] = news.Id;
					row["newsTitle"] = this.encodeHtml(news.Title);
					row["newsURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildNewsArticleURL(news.Id, true, news.Title);
					row["newsSummary"] = this.encodeHtml(news.Summary);

					newsTable.Rows.Add(row);
				}
				//Check if we have got all our news items to show
				if (newsTable.Rows.Count >= newsItemsToShow) {
					break;
				}
			}
		}

		if (newsTable.Rows.Count > 0) {
			this.repNews.Visible = true;
			this.repNews.DataSource = newsDataSet;
			this.repNews.DataBind();
		}
    }
}