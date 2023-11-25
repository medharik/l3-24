package base1;

import java.util.Iterator;
import java.util.Scanner;

public class Chaines {
public static void main(String[] args) {
	char c='a';
	char d='c';
	String ss=""+c+d;//"ac"
	Scanner clavier=new Scanner(System.in);

	
//	String terminaison= ""+verbe.charAt(verbe.length()-2)+ verbe.charAt(verbe.length()-1);
	System.out.println("Entrer un verbe");
	String verbe=clavier.next();
	String radical="";
	String terminaison="";
	String s[]= {"je","tu","il","nous","vous","ils/elles"};
	String t[]= {"e","es","e","ons","ez","ent"};
	for (int i = 0; i <= verbe.length()-3; i++) {
		radical+=verbe.charAt(i);
	}
	for (int i = verbe.length()-2; i <= verbe.length()-1; i++) {
		terminaison+=verbe.charAt(i);
	}
//	verbe.endsWith("er")
	System.out.println(" le radical est "+radical);
	System.out.println("la terminaison est "+terminaison);
	
	
		if (terminaison.equals("er") ) {
		System.out.println(verbe+" est du premier groupe");
		System.out.println("Conjugaison du verbe "+verbe+" au present : ");
		for (int i = 0; i < s.length; i++) {
			System.out.println(s[i]+" "+radical+t[i]);
		}
		
		
	} else {
		System.out.println(verbe+"n'est pas du premier groupe");
	}
	
}
}
