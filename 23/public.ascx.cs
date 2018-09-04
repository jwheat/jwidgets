using System;
using System.Collections;
using System.Data;
using Jadu.Web;

public partial class NavigationWidget : Jadu.Web.FrontEnd.HomepageWidget 
{
	public string navWidgetTitle = "";

	protected void Page_Load(object sender, EventArgs e) {

		this.navWidgetTitle = this.getSetting("nav_widget_title");

		//Create dataset to hold info returned data from PHP function calls
		DataSet widgetLinksDataSet = new DataSet();
		DataTable WidgetLinksTable = widgetLinksDataSet.Tables.Add("links");
		WidgetLinksTable.Columns.Add("title", Type.GetType("System.String"));
		WidgetLinksTable.Columns.Add("link", Type.GetType("System.String"));

		int navItemIndex = 0;

		while (this.Settings.ContainsKey("link" + navItemIndex + "title")) {

			string linkTitle = this.Settings["link" + navItemIndex + "title"];
			string linkURL = this.Settings["link" + navItemIndex + "url"];

			if (linkURL.IndexOf("http://", 0) == -1 && linkURL.IndexOf("https://", 0) == -1) {
				//Add http
				linkURL = "http://" + linkURL;
			}

			DataRow Row = WidgetLinksTable.NewRow();
			Row["title"] = this.encodeHtml(linkTitle);
			Row["link"] = this.encodeHtml(linkURL);
			WidgetLinksTable.Rows.Add(Row);

			navItemIndex++;
		}

		if (WidgetLinksTable.Rows.Count > 0) {
			this.repWidgetLinks.DataSource = widgetLinksDataSet;
			this.repWidgetLinks.DataMember = "links";
			this.repWidgetLinks.DataBind();
			this.repWidgetLinks.Visible = true;
			this.phNavigationWidget.Visible = true;
		}
	}
}