using System;
using System.Collections.Generic;
using System.Data;
using Jadu.Web.API;

public partial class rightAdvertsWidget : Jadu.Web.FrontEnd.HomepageWidget
{
	protected void Page_Load(object sender, EventArgs e) {
		int userID = -1;
		if (this.user != null) {
			userID = this.user.Id;
		}
		List<Advert> rightAdverts = new List<Advert>(this.Factory.JaduAdvertsGlobals.GetRightAdvertsForUser(userID));

		if (rightAdverts.Count > 0) {
			this.repRightAdverts.Visible = true;

			DataSet dsRightAdverts = new DataSet();
			DataTable dtRightAdverts = dsRightAdverts.Tables.Add("Right adverts");
			dtRightAdverts.Columns.Add("advertURL", Type.GetType("System.String"));
			dtRightAdverts.Columns.Add("advertImageURL", Type.GetType("System.String"));
			dtRightAdverts.Columns.Add("advertTitle", Type.GetType("System.String"));

			foreach (Advert advert in rightAdverts) {
				DataRow drRightAdvert = dtRightAdverts.NewRow();
				drRightAdvert["advertURL"] = this.encodeHtml(advert.Url);
				drRightAdvert["advertImageURL"] = this.encodeHtml(advert.ImageURL);
				drRightAdvert["advertTitle"] = this.encodeHtml(advert.Title);
				dtRightAdverts.Rows.Add(drRightAdvert);
			}

			this.repRightAdverts.DataSource = dsRightAdverts;
			this.repRightAdverts.DataBind();
		}
	}
}