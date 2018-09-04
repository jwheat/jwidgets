<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="WhatsNewWidget" %>

<asp:PlaceHolder ID="phWhatsNewWidget" runat="server">
	<div class="NewOnSiteWidget">
		<h2>New on site</h2>
	<asp:Repeater ID="repWhatsNew" runat="server">
		<HeaderTemplate>
		<ul class="list">
		</HeaderTemplate>
		<ItemTemplate>
			<li><a href="<%# DataBinder.Eval(Container.DataItem,"itemURL")%>"><%# DataBinder.Eval(Container.DataItem,"title") %></a> - <%# DataBinder.Eval(Container.DataItem, "type")%></li>
		</ItemTemplate>
		<FooterTemplate>
		</ul>
		</FooterTemplate>
	</asp:Repeater>
	</div>
</asp:PlaceHolder>
