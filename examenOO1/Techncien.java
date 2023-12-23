package examenOO1;

public abstract  class Techncien {
private String numero,specialite;

protected abstract double calculerSalaire() 	;
public Techncien() {
	// TODO Auto-generated constructor stub
}
public Techncien(String numero, String specialite) {
	super();
	this.numero = numero;
	this.specialite = specialite;
}
public String getNumero() {
	return numero;
}
public void setNumero(String numero) {
	this.numero = numero;
}
public String getSpecialite() {
	return specialite;
}
public void setSpecialite(String specialite) {
	this.specialite = specialite;
}

}
