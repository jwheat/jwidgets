using System;
using Jadu.Web;

// Image Widget

public partial class ImageWidget : Jadu.Web.FrontEnd.HomepageWidget
{
	//public int widgetID;
	protected string imageURL = "";
	protected string imageLink = "";
	protected string imageLinkText = "";
	protected string imageAltText = "";

    /// <summary>
    /// This will execute on page load to provide the actual contents of the widget
    /// </summary>
    /// <param name="sender"></param>
    /// <param name="e"></param>
    protected void Page_Load (object sender, EventArgs e)
    {
		string imageFile = this.getSetting("img_src");
		this.imageLink = this.getSetting("link_href");

		if (this.imageLink != "" &&
			this.imageLink.IndexOf("http://") < 0 && 
			this.imageLink.IndexOf("https://") < 0 && 
			this.imageLink.IndexOf("mailto:") < 0 && 
			this.imageLink.Trim().Length > 0) {
			this.imageLink = "http://" + this.imageLink;
		}

		this.imageLinkText = this.getSetting("link_text");

		this.imageAltText = this.Factory.JaduImagesGlobals.GetImageProperty(imageFile, "altText");

		if (imageFile != "") {
			this.imageURL = this.getStaticContentRootURL() + "/images/" + imageFile;
			this.phImageWidgetDiv.Visible = true;

			if (this.imageLink != "") {
				this.phImageWidgetImageLink.Visible = true;
				if (this.imageLinkText != "") {			
					this.phImageWidgetTextLink.Visible = true;
				}			
			} else {
				this.phImageWidgetImage.Visible = true;
				if (this.imageLinkText != "") {			
					this.phImageWidgetText.Visible = true;
				}			
			}
		}
    }
}
