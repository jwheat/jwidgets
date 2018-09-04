<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="LatestNewsWidget" %>

<div class="latestNewsWidget">
	<h2>Latest News</h2>
	<asp:Repeater ID="repNews" runat="server" Visible="false">
		<ItemTemplate>
	<h3><a href="<%# DataBinder.Eval(Container.DataItem,"newsURL") %>"><%# DataBinder.Eval(Container.DataItem,"newsTitle") %></a></h3>
	<p><%# DataBinder.Eval(Container.DataItem,"newsSummary") %></p>
		</ItemTemplate>
	</asp:Repeater>
	<p><a href="<% Response.Write(this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildRSSURL("news", -1)); %>" target="_blank"><img src="<% Response.Write(this.getStaticContentRootURL()); %>/site/images/xml.gif" alt="Get this feed" /> RSS News feed</a>.</p>
</div>
