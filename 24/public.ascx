<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="OpinionPoll" %>

<div class="opinionPollWidget">
	<h2>Opinion Poll</h2>
<asp:PlaceHolder ID="phPollQuestion" runat="server" Visible="false">
	<p><span><% Response.Write(this.encodeHtml(this.currentPoll.Question)); %></span></p>
</asp:PlaceHolder>
<asp:PlaceHolder ID="phPollForm" runat="server" Visible="false">
	<form id="pollForm" action="<% Response.Write(this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildPollResultsURL(-1, "")); %>" method="post">
		<input type="hidden" name="pollID" value="<% Response.Write(this.currentPoll.Id);%>" />
	<asp:Repeater ID="repPollAnswers" runat="server">
		<ItemTemplate>
		<p><label for="pollAnswer<%# DataBinder.Eval(Container.DataItem,"i") %>">
		<input type="radio" id="pollAnswer<%# DataBinder.Eval(Container.DataItem,"i") %>" name="answer" value="<%# DataBinder.Eval(Container.DataItem,"i") %>" /> <%# DataBinder.Eval(Container.DataItem,"answer") %></label>
		<div class="clear"></div></p>
		</ItemTemplate>
	</asp:Repeater>
		<p><input type="submit" value="Vote now" class="button" /></p>
	</form>
</asp:PlaceHolder>
<asp:PlaceHolder ID="phPollTotalVotes" runat="server" Visible="false">
	<p>Total Votes: <% Response.Write(this.currentPoll.GetTotalVotes()); %> | <a href="<% Response.Write(this.getSiteRootURL()  + this.Factory.JaduReadableURLsGlobals.BuildPollResultsURL(-1, "")); %>">Results</a> | <a href="<% Response.Write(this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildPastPollResultsURL()); %>">Past Polls</a></p>
</asp:PlaceHolder>
<asp:PlaceHolder ID="phNoLivePolls" runat="server" Visible="false">
	<p>There are currently no opinion polls available to vote on.</p>
	<p><a href="<% Response.Write(this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildPastPollResultsURL()); %>">Past Polls</a></p>
</asp:PlaceHolder>
</div>
