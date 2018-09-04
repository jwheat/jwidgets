using System;
using System.Collections.Generic;
using System.Data;
using System.Web.UI;
using System.Web.UI.WebControls;
using Jadu.Web.API;

public partial class calendarWidget : Jadu.Web.FrontEnd.HomepageWidget
{

    protected DateTime currentDate;
    private string currentYear;
    private string currentMonth;

    private DateTime nextDate;

    private DateTime previousDate;

    protected void Page_Load(object sender, EventArgs e)
    {
        string[] days = { "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" };

        DateTime now = DateTime.Now;

		this.currentYear = now.Year.ToString();
		this.currentMonth = now.Month.ToString();

        DateTime currentMonthStart = DateTime.Parse(this.currentMonth + "/" + this.currentYear);
        currentMonthStart = currentMonthStart.AddDays(-currentMonthStart.Day + 1);

        this.nextDate = currentMonthStart.AddMonths(1);
        this.previousDate = currentMonthStart.AddMonths(-1);

        string nextMonth = currentMonthStart.AddMonths(1).Month.ToString();
        string month = currentMonthStart.Month.ToString();

        DateTime currentDate = currentMonthStart;
        this.currentDate = currentMonthStart;


        DataSet dsCalendarDays = new DataSet();
		DataTable dtCalendarDays = dsCalendarDays.Tables.Add("Events Calendar");
		dtCalendarDays.Columns.Add("eventURL", Type.GetType("System.String"));
		dtCalendarDays.Columns.Add("currentDay", Type.GetType("System.String"));
		dtCalendarDays.Columns.Add("todayClass", Type.GetType("System.String"));
		dtCalendarDays.Columns.Add("dateString", Type.GetType("System.String"));
		dtCalendarDays.Columns.Add("index", Type.GetType("System.Int32"));

        int startOffset = 0;
        int count = 0;
		for (int j = 0; j <= 6; j++) {
			if (currentMonthStart.DayOfWeek.ToString() == days[j]) {
				startOffset = j;
			}
		}

        int endOffset = 0;

        DateTime currentMonthEnd = currentMonthStart.AddMonths(1).AddDays(-1);

		for (int j = 0; j <= 6; j++) {
			if (currentMonthEnd.DayOfWeek.ToString() == days[j]) {
				endOffset = 6 - j;
			}
		}

        for (int j = 0; j <= startOffset; j++) {
			DataRow drCalendarDays = dtCalendarDays.NewRow();

			drCalendarDays["eventURL"] = "";
			drCalendarDays["currentDay"] = "";
			drCalendarDays["todayClass"] = "";
			drCalendarDays["dateString"] = "";
			drCalendarDays["index"] = count;
			count++;

			dtCalendarDays.Rows.Add(drCalendarDays);
        }


        while (currentDate.Month.ToString() != nextMonth){
			DataRow drCalendarDays = dtCalendarDays.NewRow();

			drCalendarDays["eventURL"] = this.getSiteRootURL() + this.Factory.JaduReadableURLsGlobals.BuildEventsURL(-1, "", -1, currentDate.ToString("dd-MM-yyyy"), currentDate.ToString("dd-MM-yyyy"), -1, -1, -1, false, true);
			drCalendarDays["currentDay"] = currentDate.ToString("dd");
			DateTime tempDate = new DateTime(currentDate.Year, currentDate.Month, currentDate.Day);

			if (tempDate == DateTime.Today) {
				drCalendarDays["todayClass"] = "class=\"today\"";
			}
			else {
				drCalendarDays["todayClass"] = "";
			}
			drCalendarDays["dateString"] = currentDate.ToString("dd-MM-yyyy");
			drCalendarDays["index"] = count;
			count++;

			dtCalendarDays.Rows.Add(drCalendarDays);
            currentDate = currentDate.AddDays(1);
        }

        for (int j = 0; j < endOffset; j++) {
			DataRow drCalendarDays = dtCalendarDays.NewRow();

			drCalendarDays["eventURL"] = "";
			drCalendarDays["currentDay"] = "";
			drCalendarDays["todayClass"] = "";
			drCalendarDays["dateString"] = "";
			drCalendarDays["index"] = count;
			count++;

			dtCalendarDays.Rows.Add(drCalendarDays);
        }

        //Bind the data to the Repeater
        this.repEventCalendar.DataSource = dsCalendarDays;
        this.repEventCalendar.DataMember = "Events Calendar";
        this.repEventCalendar.DataBind();
    }

	public void repEventCalendarOnItemDataBound(object sender, System.Web.UI.WebControls.RepeaterItemEventArgs e)
    {
        RepeaterItem item = e.Item;
        if (item.ItemType == ListItemType.Item || item.ItemType == ListItemType.AlternatingItem) {
            PlaceHolder StartRow = (PlaceHolder)item.FindControl("phStartRow");
            PlaceHolder EndRow = (PlaceHolder)item.FindControl("phEndRow");
			PlaceHolder validDateWithEvents = (PlaceHolder)item.FindControl("phDaysOfMonthWithEvents");
			PlaceHolder validDateNoEvents = (PlaceHolder)item.FindControl("phDaysOfMonthNoEvents");
            PlaceHolder notValidDate = (PlaceHolder)item.FindControl("phNotValidDate");

            int index = System.Convert.ToInt32(DataBinder.Eval(item.DataItem, "index"));

			if ((string)DataBinder.Eval(item.DataItem, "currentDay") == "") {
				notValidDate.Visible = true;
			}
			else {
				if (new List<Event>(this.Factory.JaduEventsGlobals.GetEventsForDate(DataBinder.Eval(item.DataItem, "dateString").ToString(), true)).Count > 0) {
					validDateWithEvents.Visible = true;
				}
				else {
					validDateNoEvents.Visible = true;
				}
			}

            if (index == 1 || index == 8 || index == 15 || index == 22 || index == 29 || index == 36) {
                StartRow.Visible = true;
            }

            if (index % 7 == 0) {
                EndRow.Visible = true;
            }
		}
    }
}