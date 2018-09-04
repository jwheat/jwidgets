using System;
using Jadu.Web.API;

public partial class whatsOnWidget : Jadu.Web.FrontEnd.HomepageWidget
{
    protected Event pickOfWeek;

    protected void Page_Load(object sender, EventArgs e)
    {
        this.pickOfWeek = this.Factory.JaduEventsGlobals.GetPickOfWeek(true, true);
        if (this.pickOfWeek != null && this.pickOfWeek.Summary.Length > 0)
        {
            string oldPickSummary = this.pickOfWeek.Summary;
            if (oldPickSummary.Length > 200)
            {
                this.pickOfWeek.Summary = this.pickOfWeek.Summary.Substring(0, 200);
                int pos = this.pickOfWeek.Summary.LastIndexOf(" ");
                if (pos > 0)
                {
                    this.pickOfWeek.Summary = this.pickOfWeek.Summary.Substring(0, pos - 3);
                    this.pickOfWeek.Summary += "...";
                }
            }
			this.phPickOfWeekDetails.Visible = true;
        }
    }
}