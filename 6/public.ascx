<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="ContentWidget" %>
<%@ Register TagPrefix="Jadu" TagName="editorContent" src="~/site/components/content/EditorContent.ascx" %>
<asp:PlaceHolder ID="phContent" runat="server" visible="false">
	<div class="contentWidget">
		<h2><% Response.Write(encodeHtml(title)); %></h2>
		<div class="widget_content byEditor">
			<Jadu:editorContent ID="editorContent" runat="server" />
		</div>
	</div>
</asp:PlaceHolder>
