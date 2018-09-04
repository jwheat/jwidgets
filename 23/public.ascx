<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="NavigationWidget" %>

<asp:PlaceHolder ID="phNavigationWidget" runat="server" Visible="false">
	<div class="navigationWidget">
		<h2><% Response.Write(this.encodeHtml(this.navWidgetTitle)); %></h2>
	<asp:Repeater ID="repWidgetLinks" runat="server" Visible="false">
		<HeaderTemplate>
		<ul class="list">
		</HeaderTemplate>
		<ItemTemplate> 
			<li><a href="<%# DataBinder.Eval(Container.DataItem,"link") %>"><%# DataBinder.Eval(Container.DataItem,"title") %></a></li>
		</ItemTemplate>
		<FooterTemplate>
		</ul>
		</FooterTemplate>
	</asp:Repeater>
	</div>
</asp:PlaceHolder>
