using System;
using System.Collections;
using System.Collections.Generic;
using System.Data;
using Jadu.Web.API;
using Jadu.Web.API.XForms;

public partial class WhatsNewWidget : Jadu.Web.FrontEnd.HomepageWidget {


	public const int MAX_NEW_ON_SITE = 5;
	public int MAX_NEW_PER_SECTION = 5;

	//Array to hold items for the 5 different sections: News, Events, Download, Document, Form
	public ArrayList sections = new ArrayList();

	protected void Page_Load(object sender, EventArgs e) {

		int count = 0;
		int maxCount = MAX_NEW_PER_SECTION * 5;

		List<News> newsArrayList = new List<News>(this.Factory.JaduNewsGlobals.GetAllNewsByDate(true, true));
		List<Event> eventArrayList = new List<Event>(this.Factory.JaduEventsGlobals.GetNumEvents(MAX_NEW_PER_SECTION, "dateCreated DESC", true));
		List<DownloadFile> downloadArrayList = new List<DownloadFile>(this.Factory.JaduDownloadFilesGlobals.GetXMostRecentlyCreatedDownloadFiles(MAX_NEW_PER_SECTION, true, true, true));
		List<Document> documentArrayList = new List<Document>(this.Factory.JaduDocumentsGlobals.GetXMostRecentlyCreatedDocuments(MAX_NEW_PER_SECTION, true, true));
		
		//Add data for each section to sections hashtable
		sections.Add(newsArrayList);
		sections.Add(eventArrayList);
		sections.Add(downloadArrayList);
		sections.Add(documentArrayList);
		
		if (Constants.getAsInt("INSTALLATION_TYPE") != Constants.getAsInt("GALAXY")) {
			List<XFormsForm> formArrayList = new List<XFormsForm>(this.Factory.JaduXFormsFormGlobals.GetXMostRecentlyCreatedXFormsForms(MAX_NEW_PER_SECTION, "enterDate DESC, title"));
			sections.Add(formArrayList);
		}

		//Create a DataTable that will hold info for 'whats new' items
		DataSet whatsNewDataSet = new DataSet();
		DataTable whatsNewTable = whatsNewDataSet.Tables.Add("whatsNew");

		//Create columns for the created table
		whatsNewTable.Columns.Add("itemURL", Type.GetType("System.String"));
		whatsNewTable.Columns.Add("title", Type.GetType("System.String"));
		whatsNewTable.Columns.Add("type", Type.GetType("System.String"));

		DateTime startDateTime = new System.DateTime(1970, 1, 1, 0, 0, 0, 0);

		while ((count < MAX_NEW_ON_SITE) && (count < maxCount)) {
			DateTime latestDate = new System.DateTime(1970, 1, 1, 0, 0, 0, 0);
			string latestSection = "";
			int sectionCount = 0;
	
			for (int i = 0; i < 5; i++) {
				List<News> newsArray = (List<News>)sections[0];
				List<Event> eventArray = (List<Event>)sections[1];
				List<DownloadFile> downloadArray = (List<DownloadFile>)sections[2];
				List<Document> documentArray = (List<Document>)sections[3];

				if (Constants.getAsInt("INSTALLATION_TYPE") != Constants.getAsInt("GALAXY")) {
					List<XFormsForm> formArray = (List<XFormsForm>)sections[4];

					if (formArray.Count != 0) {
						XFormsForm formItem = (XFormsForm)formArray[0];
						DateTime date = startDateTime.AddSeconds(formItem.EnterDate);
						if (DateTime.Compare(date, latestDate) == 0 || DateTime.Compare(date, latestDate) > 0) {
							latestDate = date;
							latestSection = "Form";
						}
					}
				}

				if (newsArray.Count != 0) {
					News newsItem = (News)newsArray[0];
					DateTime date = startDateTime.AddSeconds(newsItem.NewsDate);
					if (DateTime.Compare(date, latestDate) == 0 || DateTime.Compare(date, latestDate) > 0) {
						latestDate = date;
						latestSection = "News";
					}
				}
				

				if (eventArray.Count != 0) {
					Event eventItem = (Event)eventArray[0];
					DateTime date = startDateTime.AddSeconds(eventItem.DateCreated);
					if (DateTime.Compare(date, latestDate) == 0 || DateTime.Compare(date, latestDate) > 0) {
						latestDate = date;
						latestSection = "Event";
					}
				}
				
				if (downloadArrayList.Count != 0) {
					DownloadFile downloadItem = (DownloadFile)downloadArray[0];
					DateTime date = startDateTime.AddSeconds(downloadItem.CreationDate);
					if (DateTime.Compare(date, latestDate) == 0 || DateTime.Compare(date, latestDate) > 0) {
						latestDate = date;
						latestSection = "Download";
					}
				}
				
				if (documentArray.Count != 0) {
					Document documentItem = (Document)documentArray[0];
					DateTime date = startDateTime.AddSeconds(documentItem.EnterDate);
					if (DateTime.Compare(date, latestDate) == 0 || DateTime.Compare(date, latestDate) > 0) {
						latestDate = date;
						latestSection = "Document";
					}
				}		
				
			}

			if (latestSection != "") {
				switch (latestSection) {
					case "News":
						List<News> newsArray = (List<News>)sections[0];
						if (newsArray.Count > 0) {
							News newsItem = (News)(newsArray[0]);
							DataRow newsRow = whatsNewTable.NewRow();
							newsRow["itemURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildNewsArticleURL(newsItem.Id, true, newsItem.Title);
							newsRow["title"] = this.encodeHtml(newsItem.Title);
							newsRow["type"] = latestSection;
							whatsNewTable.Rows.Add(newsRow);
						}
						sectionCount = ((List<News>)sections[0]).Count;
						if (sectionCount > 0) {
							((List<News>)sections[0]).RemoveAt(0);
						}
						break;
					case "Event":
						List<Event> eventArray = (List<Event>)sections[1];
						if (eventArray.Count > 0) {
							Event eventItem = (Event)(eventArray[0]);
							DataRow eventRow = whatsNewTable.NewRow();
							eventRow["itemURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildEventsURL(-1, "", eventItem.Id, "", "", -1, -1, -1, false, true);
							eventRow["title"] = this.encodeHtml(eventItem.Title);
							eventRow["type"] = latestSection;
							whatsNewTable.Rows.Add(eventRow);
						}
						sectionCount = ((List<Event>)sections[1]).Count;
						if (sectionCount > 0) {
							((List<Event>)sections[1]).RemoveAt(0);
						}
						break;
					case "Download":
						List<DownloadFile> downloadArray = (List<DownloadFile>)sections[2];
						if (downloadArray.Count > 0) {
							DownloadFile downloadItem = (DownloadFile)(downloadArray[0]);
							DataRow downloadRow = whatsNewTable.NewRow();
							downloadRow["itemURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildDownloadsURL(-1, downloadItem.Id, -1, false, "downloads", true);
							downloadRow["title"] = this.encodeHtml(downloadItem.Title);
							downloadRow["type"] = latestSection;
							whatsNewTable.Rows.Add(downloadRow);
						}
						sectionCount = ((List<DownloadFile>)sections[2]).Count;
						if (sectionCount > 0) {
							((List<DownloadFile>)sections[2]).RemoveAt(0);
						}
						break;
					case "Document":
						List<Document> documentArray = (List<Document>)sections[3];
						if (documentArray.Count > 0) {
							Document documentItem = (Document)(documentArray[0]);
							DocumentHeader documentHeader = this.Factory.JaduDocumentHeadersGlobals.GetDocumentHeader(documentItem.HeaderOriginalID, true);

							DataRow documentRow = whatsNewTable.NewRow();
							documentRow["itemURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildDocumentsURL(documentItem.Id, -1, 1, true, documentHeader.Title, "");
							documentRow["title"] = this.encodeHtml(documentHeader.Title);
							documentRow["type"] = latestSection;
							whatsNewTable.Rows.Add(documentRow);
						}
						sectionCount = ((List<Document>)sections[3]).Count;
						if (sectionCount > 0) {
							((List<Document>)sections[3]).RemoveAt(0);
						}
						break;
					case "Form":
						List<XFormsForm> formArray = (List<XFormsForm>)sections[4];
						if (formArray.Count > 0) {
							XFormsForm formItem = (XFormsForm)(formArray[0]);
							DataRow formRow = whatsNewTable.NewRow();
							formRow["itemURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildXFormsURL(formItem.Id, true, formItem.Title);
							formRow["title"] = this.encodeHtml(formItem.Title);
							formRow["type"] = latestSection;
							whatsNewTable.Rows.Add(formRow);
						}
						sectionCount = ((List<XFormsForm>)sections[4]).Count;
						if (sectionCount > 0) {
							((List<XFormsForm>)sections[4]).RemoveAt(0);
						}
						break;
				}
				maxCount--;
			}

			count++;
		}

		//Bind data to widget control
		this.repWhatsNew.DataSource = whatsNewDataSet;
		this.repWhatsNew.DataBind();
	}
}