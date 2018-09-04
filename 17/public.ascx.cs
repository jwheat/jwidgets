using System;
using System.Collections.Generic;
using Jadu.Web.API;

public partial class homepageBannerWidget : Jadu.Web.FrontEnd.HomepageWidget
{
    protected HomepageBanner homepageBanner;

    protected void Page_Load(object sender, EventArgs e)
    {
        List<HomepageBanner> homepageBanners = new List<HomepageBanner>(this.Factory.JaduHomepageBannersGlobals.GetAllHomepageBanners(true));
        if (homepageBanners.Count > 0) {
            homepageBanner = homepageBanners[new Random().Next(0, homepageBanners.Count)];
            phHomepageBanner.Visible = true;
            if (homepageBanner.Href != "") {
                phBannerLinkOpening.Visible = true;
                phBannerLinkClosing.Visible = true;
            }
        }
    }
}