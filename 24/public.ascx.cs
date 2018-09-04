using System;
using System.Data;
using Jadu.Web.API;

public partial class OpinionPoll : Jadu.Web.FrontEnd.HomepageWidget
{
    public String currentPollQuestion = "";
    public int currentPollTotalVotes = 0;
    protected Poll currentPoll;
    public string currentPollID = "";

    protected void Page_Load(object sender, EventArgs e)
    {
		this.currentPoll = this.Factory.JaduPollsGlobals.GetCurrentPoll();

		if (this.currentPoll != null) {
			this.phPollQuestion.Visible = true;
			this.phPollTotalVotes.Visible = true;

                if (Session[getSessionKey("voted" + currentPoll.Id)] == null) {
                    //We have not voted					
					this.phPollForm.Visible = true;

                    //Create dataset to hold all answers
                    DataSet answersDataSet = new DataSet();
                    DataTable answersTable = answersDataSet.Tables.Add("answers");
                    answersTable.Columns.Add("i", Type.GetType("System.String"));
                    answersTable.Columns.Add("answer", Type.GetType("System.String"));
                
                    //Display all possible answers for this poll question
					int i = 1;
					foreach (string answer in this.currentPoll.Answers) {
						DataRow answerRow = answersTable.NewRow();
						answerRow["i"] = i;
						answerRow["answer"] = this.encodeHtml(answer);
						answersTable.Rows.Add(answerRow);
						i++;
					}

                    //Bind data to the widget
                    this.repPollAnswers.DataSource = answersDataSet;
                    this.repPollAnswers.DataBind();
                }
		}
		else {
			this.phNoLivePolls.Visible = true;
		}
    }
}