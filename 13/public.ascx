<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="whatsOnWidget" %>

<div class="WhatsOnWidget">
	<h2>What&#39;s on</h2>
<asp:PlaceHolder ID="phPickOfWeekDetails" runat="server" Visible="false">
	<h3><a href="<% Response.Write(this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildEventsURL(-1, "", this.pickOfWeek.Id, "", "", -1, -1, -1, false, true)); %>"><% Response.Write(this.encodeHtml(this.pickOfWeek.Title)); %></a></h3>
	<p><% Response.Write(this.encodeHtml(this.pickOfWeek.Summary).Replace("\n", "<br />")); %></p>
</asp:PlaceHolder>
	<p><a href="<% Response.Write(this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildEventsURL(-1, "", -1, "", "", -1, -1, -1, false, true)); %>">More events.</a></p>
</div>
