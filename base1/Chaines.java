package base1;

import java.util.Scanner;

public class Chaines {
public static void main(String[] args) {
	char c='a';
	char d='c';
	String s=""+c+d;//"ac"
	Scanner clavier=new Scanner(System.in);
	System.out.println("Entrer un verbe");
	String verbe=clavier.next();
//	String terminaison= ""+verbe.charAt(verbe.length()-2)+ verbe.charAt(verbe.length()-1);
String terminaison="";
	for (int i = verbe.length()-2; i <= verbe.length()-1; i++) {
		terminaison+=verbe.charAt(i);
	}
	System.out.println("terminaison est "+terminaison);
	if (terminaison.equals("er")) {
		System.out.println(verbe+" est du premier groupe");
	} else {
		System.out.println(verbe+"n'est pas du premier groupe");
	}
	
}
}
