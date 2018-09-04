<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="DocumentsWidget" %>

<asp:PlaceHolder ID="phDocumentsWidget" runat="server" Visible="false">
	<div class="documentListWidget">
		<h2>Information in <% Response.Write(this.encodeHtml(this.categoryViewing.Name)); %></h2>
	<asp:Repeater ID="repDocuments" runat="server">
		<HeaderTemplate>
		<ul class="list">
		</HeaderTemplate>
		<ItemTemplate> 
			<li><a href="<%# DataBinder.Eval(Container.DataItem,"documentURL") %>"><%# DataBinder.Eval(Container.DataItem, "title")%></a></li>
		</ItemTemplate>
		<FooterTemplate>
		</ul>
		</FooterTemplate>
	</asp:Repeater>
	</div>
</asp:PlaceHolder>
