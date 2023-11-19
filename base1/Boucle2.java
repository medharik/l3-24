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
	
	//System.out.println("Entrer le nombre secret");//ecrire a l'ecran
	//int nombre=clavier.nextInt();//lire au clavier et affecter la valeur au nombre
	//System.out.println("Nombre est "+nombre);
	//exercice a rendre la semaine prochaine 
	//Modifier ce programme pour permettre a 3 joueurs d'essayer de  trouver le nombre secret
	// chaque joueur , doit commencer, par saisir son prenom
	//le programme affiche , a la fin du jeu , le prenom du joueur qui gagné
	// un joueur gagne si la somme des ecarts par rapport au nombre secret est minimal
	// si un joueur trouve le nombre secret , il sera le gagnant et le jeu s'arrete 
	int nombre=0,nombreEssai=0,cpt=0;
	//cpt pour connaitre le numero de la  de la valeur 
	double minEcart=0;
	boolean trouve=false;
	boolean premiereFois=true;
String gagnant="";
	for (int i = 0; i < 3; i++) {
		//i=0
		double sommeEcart=0;
	
	System.out.println("Entrer votre prenom ");
	String prenom=clavier.next();
	
System.out.println("tu t'appelles "+prenom);
	do {
		System.out.println("Entrer le nombre secret");
		nombre=clavier.nextInt();
	
		trouve=   nombre==123;
//
		if(trouve) {
			System.out.println("Bravo , le gagant est "+prenom);
			return ;
		};
		
		if (!trouve) {
//			if(nombre<=113 && nombre>=133 )
			double ecart=Math.abs(123-nombre);
				sommeEcart+=ecart;
				
				nombreEssai++;
//			if(ecart>=10)
//			
//			else System.out.println("il ne reste q'un ecart <10"+(123-nombre)+" pour trover ce nombre");
//			
			if(nombreEssai==3) {
				System.out.println("Arret du programme , nombre essais =3");
				break;
			}
			System.out.println("ce n'est le bon nombre, il vous reste "+(3-nombreEssai)+"essai(s)");
		}
	}while(!trouve  ); // la condition contraire : i==0 ou nombre==123
	nombreEssai=0;
	if (premiereFois) {
		minEcart=sommeEcart;
		premiereFois=false;
	}
	if (minEcart>sommeEcart) {
		minEcart=sommeEcart;
		gagnant=prenom;
//		System.out.println(" prenom est "+prenom+", gagnant "+gagnant);
	}
	System.out.println("la somme des ecarts pour le joueur "+prenom+" est "+sommeEcart);
	System.out.println("la somme min des ecarts  est "+minEcart+" le gagnant est "+gagnant);

	if( trouve)
	System.out.println("Bravo, le nombre secret est "+nombre+", apres "+nombreEssai+" Essai(s)");
}//fin de la boucle for
	
}
}
