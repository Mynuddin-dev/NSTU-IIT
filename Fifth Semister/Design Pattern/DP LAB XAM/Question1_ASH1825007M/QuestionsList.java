package SE3110_Question1;

public class QuestionsList{

	public static final int TRUEFALSE = 0;
	public static final int FREEFORM = 1;
	public String question; // Actual question
	public String answer; // Answer to question
	public int value; // Point value of question
	public int type; // Question type, TRUEFALSE or FREEFORM
	public QuestionsList()
	{
	question = "";
	answer = "";
	value = 0;
	type = FREEFORM;
	}
	public QuestionsList(String q, String a, int v, int t)
	{
	question = q;
	answer = a;
	value = v;
	type = t;
	}

}
