package SE3110_Question1;

/*
Name: Md Mynuddin
Roll No: ASH1825007M
Email: dp@mynuddin2513@student.edu.nstu.bd#2021
Date: 22/9/2021

 */

import java.io.*;
import java.util.Scanner;

public class QuestionAnswerGame{

	public QuestionsData questions; // Questions
	public QuestionAnswerGame()
	{
	// Load questions
	questions = new QuestionsData();
	questions.addQuestion("The possession of more than two sets of chromosomes is termed?",
	"polyploidy", 3, QuestionsList.FREEFORM);
	questions.addQuestion("Erling Kagge skiied into the north pole alone on January 7, 1993.",
	"F", 1, QuestionsList.TRUEFALSE);
	questions.addQuestion("1997 British band that produced 'Tub Thumper'",
	"Chumbawumba", 2, QuestionsList.FREEFORM);
	questions.addQuestion("I am the geometric figure most like a lost parrot",
	"polygon", 2, QuestionsList.FREEFORM);
	questions.addQuestion("Generics were introducted to Java starting at version 5.0.",
	"T", 1, QuestionsList.TRUEFALSE);
	}
	public static void main(String[] args)
	{
	int score = 0; // Overall score
	int questionNum = 0; // Which question we're asking
	QuestionAnswerGame game = new QuestionAnswerGame();
	Scanner keyboard = new Scanner(System.in);
	// Ask a question as long as we haven't asked them all
	while (questionNum < game.questions.numQuestions())
	{
	// Show question
	game.questions.showQuestion(questionNum);
	// Get answer
	String answer = keyboard.nextLine();
	// Validate answer
	QuestionsList q = game.questions.getQuestion(questionNum);
	if (q.type == QuestionsList.TRUEFALSE){
		if (answer.charAt(0) == q.answer.charAt(0)){
			System.out.println("That is correct! You get " + q.value + " points.");
			score += q.value;
			}else{
			System.out.println("Wrong, the correct answer is " + q.answer);
			}
	}else if (q.type == QuestionsList.FREEFORM){
		if (answer.toLowerCase().equals(q.answer.toLowerCase())){
			System.out.println("That is correct! You get " + q.value + " points.");
			score += q.value;
		}else{
			System.out.println("Wrong, the correct answer is " + q.answer);
		}
	}
	System.out.println("Your score is " + score);
	questionNum++;
	}
	System.out.println("Game over! Thanks for playing!");
	}

}
//dp@mynuddin2513@student.edu.nstu.bd#2021