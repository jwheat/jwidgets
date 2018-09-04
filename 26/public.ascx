<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="DirectorySearchWidget" %>

<div class="directoryWidget">
<asp:PlaceHolder ID="phDirectoryWidgetTitle" runat="server" Visible="false">
	<h2><% Response.Write(this.encodeHtml(this.directoryWidgetTitle)); %></h2>
</asp:PlaceHolder>
<asp:PlaceHolder ID="phDirectoryWidgetContent" runat="server" Visible="false">
	<p><% Response.Write(this.encodeHtml(this.directoryWidgetContent).Replace("\n", "<br />")); %></p>
</asp:PlaceHolder>
	<form method="get" action="<% Response.Write(this.getSiteRootURL()); %>/site/scripts/directory_search.aspx">
		<input type="hidden" value="<% Response.Write(this.directoryID); %>" name="directoryID" />
		<input type="hidden" value="Search" name="search" />
		<input type="text" class="field" value="Search by keyword..." onclick="this.value = '';" name="keywords" />
		<input type="submit" class="button SorFbutt" name="submit" value="Search" />
	</form>
	<form method="get" action="<% Response.Write(this.getSiteRootURL()); %>/site/scripts/directory_search.aspx">
		<input type="hidden" value="<% Response.Write(this.directoryID); %>" name="directoryID" />
		<input type="hidden" value="Search" name="search" />
		<input type="text" class="field" value="Enter your postcode..." onclick="this.value = '';" name="postcode" />
		<input type="submit" class="button SorFbutt" name="submit" value="Find" />
	</form>
	<a href="<% Response.Write(this.getSiteRootURL()); %>/site/scripts/directory_search.aspx?directoryID=<% Response.Write(this.directoryID); %>">Advanced Search</a>
</div>
