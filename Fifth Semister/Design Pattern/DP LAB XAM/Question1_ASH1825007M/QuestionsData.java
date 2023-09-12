package SE3110_Question1;

import java.util.ArrayList;

public class QuestionsData{
	
	private ArrayList<QuestionsList> data;
	
	public QuestionsData()	{
	data = new ArrayList<QuestionsList>();
	}
	
	public void addQuestion(String q, String a, int v, int t)	{
	QuestionsList question = new QuestionsList(q,a,v,t);
	data.add(question);
	}
	
	public void showQuestion(int index)	{
	QuestionsList q = data.get(index);
	System.out.println("Question " + (index +1) + ". " + q.value + " points.");
	if (q.type == QuestionsList.TRUEFALSE){
	System.out.println(q.question);
	System.out.println("Enter 'T' for true or 'F' for false.");
	}else if (q.type == QuestionsList.FREEFORM)	{
	System.out.println(q.question);
	}
	}
	
	public int numQuestions()
	{
	return data.size();
	}
	public QuestionsList getQuestion(int index)
	{
	return data.get(index);
	}

}
