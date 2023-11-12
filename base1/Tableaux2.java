package base1;

import java.util.Arrays;
import java.util.Scanner;

public class Tableaux2 {
public static void main(String[] args) {
	//creer un tableaux de 3 notes
	double notes[]=new double[3];
//double somme=Arrays.stream(notes).sum();
	System.out.println(notes[0]);
	Scanner clavier=new Scanner(System.in);
	
	boolean valide;
	boolean soritePourErreur=false;
	int nbErreur=0;
	//pour peupler le tableau 
	for (int i = 0; i < notes.length; i++) {
	do {		
		System.out.println("Entrer la note numero "+(i+1));
		notes[i]=clavier.nextDouble();
		 valide=notes[i]>=0 && notes[i]<=20;
		if (! valide) {
			nbErreur++;
			if(nbErreur==3) {
				System.out.println("Arret du programme");
				//return ;
				soritePourErreur=true;
				break;
			}
			System.out.println("La note n'est valide, veuillez saisir une nitre entre  0 et 20");
			System.out.println("il vous reste  "+(3-nbErreur)+" essais");
			
		}
	}while(!valide);
nbErreur=0;
	
	}
	
	System.out.println(soritePourErreur);
if(!soritePourErreur) {
	//calculer la moyenne 
	double somme=0,moyenne=0;
	for (int i = 0; i < notes.length; i++) {
		somme += notes[i];
	}

	
	moyenne=somme/notes.length;
	System.out.println("la moyenne est "+moyenne);
	
}

	

}
}
