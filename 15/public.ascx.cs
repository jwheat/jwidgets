using System;
using System.Collections.Generic;
using System.Data;
using System.Web.UI;
using System.Web.UI.WebControls;
using Jadu.Web.API;

// Middle Adverts Widget

public partial class MiddleUserAdvertsWidget : Jadu.Web.FrontEnd.HomepageWidget
{
    private int userID;
    private List<Advert> middleAdverts;

    protected void Page_Load(object sender, EventArgs e)
    {
        //Get user id
		if (this.user != null) {
			userID = this.user.Id;
		}
		else {
			userID = -1;
		}

        //Call PHP function to return all adverts for the user
        this.middleAdverts = new List<Advert>(this.Factory.JaduAdvertsGlobals.GetMiddleAdvertsForUser(userID));

		if (this.middleAdverts.Count > 0) {
			this.repMiddleAdverts.Visible = true;
			//Create a DataTable that will hold advert details to be assigned to the widget control
			DataSet advertDataSet = new DataSet();
			DataTable advertsTable = advertDataSet.Tables.Add("advertsForUser");

			//Create columns for the table
			advertsTable.Columns.Add("advertTitle", Type.GetType("System.String"));
			advertsTable.Columns.Add("advertURL", Type.GetType("System.String"));
			advertsTable.Columns.Add("advertSubtitle", Type.GetType("System.String"));
			advertsTable.Columns.Add("advertImageURL", Type.GetType("System.String"));
			advertsTable.Columns.Add("advertImageLocation", Type.GetType("System.String"));
			advertsTable.Columns.Add("advertContent", Type.GetType("System.String"));

			//Add adverts to the data table
			foreach (Advert advert in this.middleAdverts) {
				DataRow row = advertsTable.NewRow();

				row["advertTitle"] = this.encodeHtml(advert.Title);
				row["advertURL"] = this.encodeHtml(advert.Url);
				row["advertSubtitle"] = this.encodeHtml(advert.Subtitle);
				row["advertImageURL"] = "";
				if (advert.ImageURL != "") {
					row["advertImageURL"] = this.getStaticContentRootURL() + "/images/" + this.encodeHtml(advert.ImageURL);
				}
				row["advertImageLocation"] = advert.ImageLocation;
				row["advertContent"] = this.encodeHtml(advert.Content);

				advertsTable.Rows.Add(row);
			}

			//Bind data to widget control
			this.repMiddleAdverts.DataSource = advertDataSet;
			this.repMiddleAdverts.DataBind();
		}
    }

    protected void advertsRepeater_ItemDataBound(object sender, System.Web.UI.WebControls.RepeaterItemEventArgs e)
    {
		RepeaterItem item = e.Item;
		PlaceHolder phAdvertImage = (PlaceHolder)e.Item.FindControl("phAdvertImage");
        if (System.Convert.ToString(DataBinder.Eval(item.DataItem, "advertImageURL")) != "") {
			phAdvertImage.Visible = true;
        }
		PlaceHolder phAdvertSubtitle = (PlaceHolder)e.Item.FindControl("phAdvertSubtitle");
		if (System.Convert.ToString(DataBinder.Eval(item.DataItem, "advertSubtitle")) != "") {
			phAdvertSubtitle.Visible = true;
		}
    }
}