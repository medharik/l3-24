package examenOO1;

public class TechncienDev extends Techncien {
protected double  montantFixe;
public final  double TARIF=25;
protected int  nombreInterventons;

protected double calculerSalaire() {
double salaire=montantFixe+nombreInterventons*TARIF;	
	return salaire;
	}
public TechncienDev() {
	// TODO Auto-generated constructor stub
}
public TechncienDev(String numero, String specialite, double montantFixe, int nombreInterventons) {
	super(numero, specialite);
	this.montantFixe = montantFixe;
	this.nombreInterventons = nombreInterventons;
}



}
