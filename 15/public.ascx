<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="MiddleUserAdvertsWidget" %>

<asp:Repeater ID="repMiddleAdverts" runat="server" OnItemDataBound="advertsRepeater_ItemDataBound" Visible="false">
	<HeaderTemplate>
		<div class="middleAdvertWidget">
			<h2>Featured content</h2>
	</HeaderTemplate>
	<ItemTemplate>
			<div class="feat_wrap">
		<asp:PlaceHolder ID="phAdvertImage" runat="server">
				<img alt="<%# DataBinder.Eval(Container.DataItem,"advertTitle") %>" src="<%# DataBinder.Eval(Container.DataItem,"advertImageURL") %>" style="float:<%# DataBinder.Eval(Container.DataItem,"advertImageLocation") %>;" />
		</asp:PlaceHolder>
				<h2><a href="<%# DataBinder.Eval(Container.DataItem,"advertURL") %>"><%# DataBinder.Eval(Container.DataItem,"advertTitle") %></a></h2>
		<asp:PlaceHolder ID="phAdvertSubTitle" runat="server" Visible="false">
				<h3><%# DataBinder.Eval(Container.DataItem,"advertSubTitle") %></h3>
		</asp:PlaceHolder>
				<p><%# DataBinder.Eval(Container.DataItem,"advertContent") %></p>
				<div class="clear"></div>
			</div>
	</ItemTemplate>
	<FooterTemplate>
		</div>
	</FooterTemplate>
</asp:Repeater>
