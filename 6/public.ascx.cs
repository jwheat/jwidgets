using System;

// Content Widget

public partial class ContentWidget : Jadu.Web.FrontEnd.HomepageWidget
{
    public string content = "";
    public string title = "";
	public string titleMarkup = "";

    /// <summary>
    /// This will execute on page load to provide the actual contents of the widget
    /// </summary>
    /// <param name="sender"></param>
    /// <param name="e"></param>
    protected void Page_Load(object sender, EventArgs e)
    {
		// collect settings for widget
		this.content = this.getSetting("content");
		this.title = this.getSetting("title");

        if (this.title != null && this.title != "") {
			this.phContent.Visible = true;
        }

		if (this.content != null && this.content.Trim() != "") {
			this.phContent.Visible = true;
		}
		
		editorContent.Content = content;
    }
}