<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="homepageBannerWidget" %>

<asp:PlaceHolder ID="phHomepageBanner" runat="server" Visible="false">
	<div class="randomimageWidget">
		<div class="banner">
		<asp:PlaceHolder ID="phBannerLinkOpening" runat="server" Visible="false">
			<a href="<% Response.Write(this.encodeHtml(this.homepageBanner.Href)); %>" target="<% Response.Write(this.encodeHtml(this.homepageBanner.Target)); %>">
		</asp:PlaceHolder>
			<img src="<% Response.Write(this.getStaticContentRootURL()); %>/images/<% Response.Write(this.encodeHtml(this.homepageBanner.ImageURL)); %>" alt="<% Response.Write(this.encodeHtml(this.homepageBanner.Title)); %>" />
			<span><% Response.Write(this.encodeHtml(this.homepageBanner.Title)); %></span>
		<asp:PlaceHolder ID="phBannerLinkClosing" runat="server" Visible="false">
			</a>
		</asp:PlaceHolder>
		</div>
	</div>
</asp:PlaceHolder>
