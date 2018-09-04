<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="rightAdvertsWidget" %>

<asp:Repeater ID="repRightAdverts" runat="server" Visible="false">
	<HeaderTemplate>
		<div class="rightAdvertWidget">
	</HeaderTemplate>
	<ItemTemplate>
			<div class="adwrap">
				<a href="<%# DataBinder.Eval(Container.DataItem,"advertURL") %>"><img src="<% Response.Write(this.getStaticContentRootURL()); %>/images/<%# DataBinder.Eval(Container.DataItem,"advertImageURL") %>" alt="<%# DataBinder.Eval(Container.DataItem,"advertTitle") %>" />
				<span><%# DataBinder.Eval(Container.DataItem,"advertTitle") %></span></a>
			</div>
	</ItemTemplate>
	<FooterTemplate>
		</div>
	</FooterTemplate>
</asp:Repeater>
