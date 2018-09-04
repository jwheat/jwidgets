using System;

public partial class DirectorySearchWidget : Jadu.Web.FrontEnd.HomepageWidget
{
	protected string directoryWidgetTitle = "";
	protected string directoryWidgetContent = "";
	protected string directoryID;
	
	protected void Page_Load(object sender, EventArgs e) 
	{
		this.directoryWidgetTitle = this.getSetting("title");
		if (this.directoryWidgetTitle != "") {
			this.phDirectoryWidgetTitle.Visible = true;
		}

		this.directoryWidgetContent = this.getSetting("description");
		if (this.directoryWidgetContent != "") {
			this.phDirectoryWidgetContent.Visible = true;
		}

		this.directoryID = this.getSetting("directoryid");
	}
}