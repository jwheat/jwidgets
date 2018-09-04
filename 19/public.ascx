<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="FaqWidget" %>

<div class="topFaqWidget">
	<h2><abbr title="Frequently Asked Questions">FAQs</abbr></h2>
<asp:Repeater ID="repTopFAQs" runat="server" Visible="false">
	<HeaderTemplate>
	<ul class="list">
	</HeaderTemplate>
	<ItemTemplate>
		<li><a href="<%# DataBinder.Eval(Container.DataItem,"FAQURL") %>"><%# DataBinder.Eval(Container.DataItem, "FAQQuestion")%></a></li>
	</ItemTemplate>
	<FooterTemplate>
	</ul>
	</FooterTemplate>
</asp:Repeater>
<asp:PlaceHolder ID="phNoFAQs" runat="server" Visible="false">
	<p>There are no FAQs to display.</p>
</asp:PlaceHolder>
</div>
