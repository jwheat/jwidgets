using System;
using System.Collections.Generic;
using System.Data;
using Jadu.Web;
using Jadu.Web.API;

// Sub Category Links Widget

public partial class SubCategoryLinksWidget : Jadu.Web.FrontEnd.HomepageWidget
{
    public int categoryID = -1;

	protected CategoryItem parentCategory;

    protected void Page_Load(object sender, EventArgs e)
    {
        //Get the categories for this widget from database or url
		string tempCategory = this.getSetting("categories");
		if (tempCategory != null && tempCategory != "") {
			this.categoryID = System.Convert.ToInt32(tempCategory);
		}
		else if (Request["categoryID"] != null) {
			this.categoryID = System.Convert.ToInt32(Request["categoryID"]);
		}
        
		if (this.categoryID > 0) {
			this.phSubCategoryLinksWidget.Visible = true;

			List<CategoryItem> childCategories = new List<CategoryItem>(this.Factory.JaduAppliedCategoriesGlobals.FilterCategoriesInUse(this.CategoryList.GetChildCategories(this.categoryID), this.Constants.get("DOCUMENTS_APPLIED_CATEGORIES_TABLE"), true, this.Constants.get("BESPOKE_CATEGORY_LIST_NAME")));

			//Get parent category name
			this.parentCategory = this.CategoryList.GetCategory(this.categoryID);

			DataSet dsSubCategories = new DataSet();
			DataTable dtSubCategories = dsSubCategories.Tables.Add("cats");
			dtSubCategories.Columns.Add("categoryURL", Type.GetType("System.String"));
			dtSubCategories.Columns.Add("categoryName", Type.GetType("System.String"));

			foreach(CategoryItem subCategory in childCategories) {
				DataRow drSubCategory = dtSubCategories.NewRow();
				drSubCategory["categoryURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildDocumentsCategoryURL(subCategory.Id, subCategory.Name);
				drSubCategory["categoryName"] = this.encodeHtml(subCategory.Name);
				dtSubCategories.Rows.Add(drSubCategory);
			}


			if (dtSubCategories.Rows.Count > 0) {
				this.repSubCategories.Visible = true;
				this.repSubCategories.DataSource = dsSubCategories;
				this.repSubCategories.DataMember = "cats";
				this.repSubCategories.DataBind();
			}
			else {
				this.phNoSubCategories.Visible = true;
			}
		}
    }
}