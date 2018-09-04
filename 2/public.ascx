<%@ Control Language="C#" AutoEventWireup="true" CodeFile="public.ascx.cs" Inherits="ImageWidget" %>

<asp:PlaceHolder ID="phImageWidgetDiv" runat="server" Visible="false">
	<div class="imageWidget">
	
		<asp:PlaceHolder ID="phImageWidgetImageLink" runat="server" Visible="false">
			<a href="<% Response.Write(this.encodeHtml(this.imageLink)); %>">
			<img src="<% Response.Write(this.encodeHtml(this.imageURL)); %>" alt="<% Response.Write(this.encodeHtml(this.imageAltText)); %>" title="<% Response.Write(this.encodeHtml(this.imageLinkText)); %>" />
			</a>
		</asp:PlaceHolder>
	
		<asp:PlaceHolder ID="phImageWidgetImage" runat="server" Visible="false">
			<img src="<% Response.Write(this.encodeHtml(this.imageURL)); %>" alt="<% Response.Write(this.encodeHtml(this.imageAltText)); %>" title="<% Response.Write(this.encodeHtml(this.imageLinkText)); %>" />
		</asp:PlaceHolder>
		
		
	
		<asp:PlaceHolder ID="phImageWidgetTextLink" runat="server" Visible="false">
			<p><a href="<% Response.Write(this.encodeHtml(this.imageLink)); %>"><% Response.Write(this.encodeHtml(this.imageLinkText)); %></a></p>
		</asp:PlaceHolder>
	
		<asp:PlaceHolder ID="phImageWidgetText" runat="server" Visible="false">
			<p><% Response.Write(this.encodeHtml(this.imageLinkText)); %></p>
		</asp:PlaceHolder>	
	</div>
</asp:PlaceHolder>
