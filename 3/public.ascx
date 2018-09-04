<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="SubCategoryLinksWidget" %>

<asp:PlaceHolder ID="phSubCategoryLinksWidget" runat="server" Visible="false">
	<div class="cateInfoWidget">
		<h3>Categories in <% Response.Write(this.encodeHtml(this.parentCategory.Name)); %></h3>
		<asp:Repeater ID="repSubCategories" runat="server" Visible="false">
			<HeaderTemplate>   
		<ul class="list">
			</HeaderTemplate>
			<ItemTemplate> 
			<li><a href="<%# DataBinder.Eval(Container.DataItem,"categoryURL") %>"><%# DataBinder.Eval(Container.DataItem,"categoryName") %></a></li>
			</ItemTemplate>
			<FooterTemplate>
		</ul>
			</FooterTemplate>
		</asp:Repeater>
		<asp:PlaceHolder ID="phNoSubCategories" runat="server" Visible="false">
			<p>There are no categories in this section.</p>
		</asp:PlaceHolder>
	</div>
</asp:PlaceHolder>
