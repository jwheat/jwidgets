using System;
using System.Collections.Generic;
using System.Data;
using Jadu.Web.API;

public partial class FaqWidget : Jadu.Web.FrontEnd.HomepageWidget
{
    protected void Page_Load(object sender, EventArgs e)
    {
        List<FAQ> commonFAQs = new List<FAQ>(this.Factory.JaduFAQGlobals.GetTopXFAQs(5, 1, true));

		if (commonFAQs.Count > 0) {
			DataSet dsFAQs = new DataSet();
			DataTable dtFAQs = dsFAQs.Tables.Add("CommonFAQs");
			dtFAQs.Columns.Add("FAQURL", Type.GetType("System.String"));
			dtFAQs.Columns.Add("FAQQuestion", Type.GetType("System.String"));

			foreach (FAQ faq in commonFAQs) {
				int catID = Factory.Get<JaduCategoriesGlobals>().GetFirstCategoryIDForItemOfType(Constants.get("FAQS_CATEGORIES_TABLE"), faq.Id, Constants.get("BESPOKE_CATEGORY_LIST_NAME"));
				
				DataRow drFAQ = dtFAQs.NewRow();
				drFAQ["FAQURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildFAQURL(false, catID, faq.Id, true) + "#a" + System.Convert.ToString(faq.Id);
				drFAQ["FAQQuestion"] = this.encodeHtml(faq.Question).Replace("\n", "<br />");
				dtFAQs.Rows.Add(drFAQ);
			}

			this.repTopFAQs.DataSource = dsFAQs;
			this.repTopFAQs.DataMember = "CommonFAQs";
			this.repTopFAQs.DataBind();
			this.repTopFAQs.Visible = true;
		}
		else {
			this.phNoFAQs.Visible = true;
		}
    }
}