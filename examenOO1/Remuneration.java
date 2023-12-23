package examenOO1;

public class Remuneration {
public static void main(String[] args) {
	TechncienDev td1=new TechncienDev("11", "Dev",2800 , 10);

	TechncienReseaux tr1=new TechncienReseaux("10", "Reseaux", 44, 80);
//	System.out.println("le salaire de td1 est "+td1.calculerSalaire());
//System.out.println("le salaire de tr1 est "+tr1.calculerSalaire());

	
	Techncien t[]= { td1,tr1,new TechncienMaintenance("13", "TM", 1000)};
	
	for (int i = 0; i < t.length; i++) {
		System.out.println("le salaire de "+t[i].getNumero()+" est "+t[i].calculerSalaire());
	}
	
}
}
