package base1;

import java.util.Iterator;
import java.util.Scanner;

public class Boucle2 {
public static void main(String[] args) {
	
	// for avec break et continue 
//	for (int i = 0; i < 6; i+=2) {
//		System.out.println("A"+i);
//		if(i==2) {
//			continue;
//		}
//		System.out.println("B"+i);
//		
//		if(i==4) {
//		break;
//		}
//		System.out.println("C"+i);
//	}
//	System.out.println("Fin");
	Scanner clavier=new Scanner(System.in);
	
//	System.out.println("Entrer le nombre secret");//ecrire a l'ecran
//	int nombre=clavier.nextInt();//lire au clavier et affecter la valeur au nombre
//System.out.println("Nombre est "+nombre);

	int nombre=0,nombreEssai=0;
	boolean trouve=false;
	do {
		System.out.println("Entrer le nombre secret");
		nombre=clavier.nextInt();
		trouve=   nombre==123;
		if (!trouve) {
			
			nombreEssai++;
			if(nombreEssai==3) {
				System.out.println("Arret du programme , nombre essais =3");
				break;
			}
			System.out.println("ce n'est le bon nombre, il vous reste "+(3-nombreEssai)+"essai(s)");
		}
		
	}while(!trouve  ); // la condition contraire : i==0 ou nombre==123
	if( trouve)
	System.out.println("Bravo, le nombre secret est "+nombre+", apres "+nombreEssai+" Essai(s)");
}
}
