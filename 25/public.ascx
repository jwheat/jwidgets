<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="MultimediaWidget" %>
<%@ Import Namespace="Jadu.Web.API" %>
<asp:PlaceHolder ID="phMultimediaItem" runat="server" Visible="false">
	<div class="widget_banner">
		<h2><%= encodeHtml(Item.Title) %></h2>
		<asp:PlaceHolder ID="mutimediaOutput" Visible="true" runat="server" />
	</div>
</asp:PlaceHolder>
