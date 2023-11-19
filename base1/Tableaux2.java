package base1;

import java.util.Arrays;
import java.util.Scanner;

public class Tableaux2 {
public static void main(String[] args) {
	//creer un tableaux de 3 notes
	double notes[]=new double[3];

	System.out.println(notes[0]);
	Scanner clavier=new Scanner(System.in);
	
	//pour peupler le tableau 
	for (int i = 0; i < notes.length; i++) {
			
	System.out.println("Entrer la note numero "+(i+1));
	notes[i]=clavier.nextDouble();
	
	}
	//calculer la moyenne 
	double somme=0,moyenne=0;
	for (int i = 0; i < notes.length; i++) {
		somme += notes[i];
	}
	moyenne=somme/notes.length;
	System.out.println("la moyenne est "+moyenne);

	

}
}
