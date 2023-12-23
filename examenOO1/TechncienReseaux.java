package examenOO1;

public class TechncienReseaux  extends Techncien{
protected  double nombreHeureTravail,tarifHoraire;
protected final double PCT_HEURE_SUP=40;
protected double calculerSalaire() {
	double salaire=0;
	if (nombreHeureTravail<=35) {
		salaire=nombreHeureTravail*tarifHoraire;
	} else {
salaire=35*tarifHoraire+(nombreHeureTravail-35)*tarifHoraire*(1+PCT_HEURE_SUP/100);
	}
	
	
	
		return salaire;
	}
public TechncienReseaux() {
	// TODO Auto-generated constructor stub
}
public TechncienReseaux(String numero, String specialite, double nombreHeureTravail, double tarifHoraire) {
	super(numero, specialite);
	this.nombreHeureTravail = nombreHeureTravail;
	this.tarifHoraire = tarifHoraire;
}


}
