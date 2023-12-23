package examenOO1;

public class TechncienMaintenance extends Techncien {
double forfaitMensuel;
public TechncienMaintenance() {
	// TODO Auto-generated constructor stub
}
	public TechncienMaintenance(String numero, String specialite, double forfaitMensuel) {
	super(numero, specialite);
	this.forfaitMensuel = forfaitMensuel;
}
	protected double calculerSalaire() {
		// TODO Auto-generated method stub
		return forfaitMensuel*4;
	}

}
