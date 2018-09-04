using System;
using System.Collections.Generic;
using System.Data;
using Jadu.Web.API;

// Documents Widget

public partial class DocumentsWidget : Jadu.Web.FrontEnd.HomepageWidget
{
    public int categoryID;
    public Array allDocuments;

    protected CategoryItem categoryViewing;

    protected void Page_Load(object sender, EventArgs e)
    {
		string tempCategory = this.getSetting("categories");

        if (tempCategory != "") {
			tempCategory = (string)tempCategory.Split(',').GetValue(0);
            this.categoryID = System.Convert.ToInt32(tempCategory);
        }
        else if (this.CurrentCategoryID > 0) {
			this.categoryID = this.CurrentCategoryID;
        }
        else {
            return;
        }

		try {
			this.categoryViewing = this.CategoryList.GetCategory(this.categoryID);
		}
		catch {
			return;
		}

		List<Document> allDocuments = new List<Document>(this.Factory.JaduDocumentsGlobals.GetAllDocumentsWithCategory(this.categoryID, true, true, "title", -1));

		if (allDocuments.Count > 0) {
			this.phDocumentsWidget.Visible = true;

			DataSet dsDocuments = new DataSet();
			DataTable dtDocuments = dsDocuments.Tables.Add("documents");

			dtDocuments.Columns.Add("categoryID", Type.GetType("System.String"));
			dtDocuments.Columns.Add("documentID", Type.GetType("System.String"));
			dtDocuments.Columns.Add("title", Type.GetType("System.String"));
			dtDocuments.Columns.Add("documentURL", Type.GetType("System.String"));

			foreach (Document document in allDocuments) {
				DocumentHeader documentHeader = this.Factory.JaduDocumentHeadersGlobals.GetDocumentHeader(document.HeaderOriginalID, true);

				DataRow drDocument = dtDocuments.NewRow();
				drDocument["categoryID"] = this.categoryID;
				drDocument["documentID"] = document.Id;
				drDocument["title"] = this.encodeHtml(documentHeader.Title);
				drDocument["documentURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildDocumentsURL(document.Id, this.categoryID, 1, true, documentHeader.Title, categoryViewing.Name);
				dtDocuments.Rows.Add(drDocument);
			}

			this.repDocuments.DataSource = dsDocuments;
			this.repDocuments.DataMember = "documents";
			this.repDocuments.DataBind();
		}
    }
}