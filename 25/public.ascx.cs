using System;
using System.Collections.Generic;
using System.Web;
using Jadu.Web.API;
using Jadu.Web.Utils;
using Jadu.Web.FrontEnd;

public partial class MultimediaWidget : Jadu.Web.FrontEnd.HomepageWidget {
	private const string MediaPlayerPath = "~/site/components/multimedia/DefaultMediaPlayer.ascx";

	protected MultimediaItem Item {get; private set;}

	protected void Page_Load(object sender, EventArgs e) 
	{
		string itemId = getSetting("itemID");
		if (!String.IsNullOrEmpty(itemId)) {
			var criteria = new Dictionary<string, string>();
			Item = Factory.Get<JaduMultimediaItemsGlobals>().GetMultimediaItem(Convert.ToInt32(itemId), criteria.ToDuckKeyedEnumerable());
		}
		if (Item != null) {
			phMultimediaItem.Visible = true;
			var control = Page.LoadControl(MediaPlayerPath) as MediaPlayer;
			control.MultimediaItem = Item;
			mutimediaOutput.Controls.Add(control);
		}
	}
}