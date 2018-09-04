<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="calendarWidget" %>

<asp:Repeater ID="repEventCalendar" runat="server" OnItemDataBound="repEventCalendarOnItemDataBound">
	<HeaderTemplate>
		<h2><% Response.Write(this.currentDate.ToString("MMMM yyyy")); %></h2>
		<div class="eventCalendarWidget">
			<table summary="This month&#39;s events calendar" class="calendar">
				<tr>
					<th scope="col" abbr="Monday">M</th>
					<th scope="col" abbr="Tuesday">T</th>
					<th scope="col" abbr="Wednesday">W</th>
					<th scope="col" abbr="Thurday">T</th>
					<th scope="col" abbr="Friday">F</th>
					<th scope="col" abbr="Saturday">S</th>
					<th scope="col" abbr="Sunday">S</th>
				</tr>
	</HeaderTemplate>
	<ItemTemplate>
			<asp:PlaceHolder ID="phStartRow" runat="server" Visible="false"><tr></asp:PlaceHolder>
			<asp:PlaceHolder ID="phNotValidDate" runat="server" Visible="false"><td></td></asp:PlaceHolder>
			<asp:PlaceHolder ID="phDaysOfMonthWithEvents" runat="server" Visible="false"><td <%# DataBinder.Eval(Container.DataItem,"todayClass") %>><a href="<%# DataBinder.Eval(Container.DataItem,"eventURL") %>"><%# DataBinder.Eval(Container.DataItem,"currentDay") %></a></td></asp:PlaceHolder>
			<asp:PlaceHolder ID="phDaysOfMonthNoEvents" runat="server" Visible="false"><td <%# DataBinder.Eval(Container.DataItem,"todayClass") %>><%# DataBinder.Eval(Container.DataItem,"currentDay") %></td></asp:PlaceHolder>
			<asp:PlaceHolder ID="phEndRow" runat="server" Visible="false"></tr></asp:PlaceHolder>
	</ItemTemplate>
	<FooterTemplate>
			</table>
		</div>
	</FooterTemplate>
</asp:Repeater>
