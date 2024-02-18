<?php 
include_once "Utils.class.php";
class Produit extends Crud {
public $libelle;
public $prix; 
public static  $table="produit";
public function __construct($libelle,$prix) {
    $this->libelle = $libelle;
    $this->prix = $prix;
}

public function afficher()  {
    echo "libelle est ".$this->libelle.", prix est : ".$this->prix."<br>";
}


// ajouter un produit
public function ajouter()  {
    try {
        $cnx=  Utils::connecter_db();
        $rp=$cnx->prepare( "insert into produit (libelle,prix ) values (?,?)" );
        $rp->execute([$this->libelle,$this->prix]);
    } catch (\Throwable $th) {
       echo "Erreur d'ajout du produit  : ".$th->getMessage();
    }
    }

    //modifier un produit
public  function modifier($id)  {
    try {
        $cnx=  Utils::connecter_db();
        $rp=$cnx->prepare( "update produit set libelle=?, prix=? where id=?" );
        $rp->execute([$this->libelle,$this->prix,$id]);
    } catch (\Throwable $th) {
       echo "Erreur de modification du produit  : ".$th->getMessage();
    }
    }
// supprimer un produit
public  function supprimer2()  {
    try {
        $cnx=  Utils::connecter_db();
        $rp=$cnx->prepare( "delete from produit where libelle=? and prix=?" );
        $rp->execute([$this->libelle,$this->prix]);
    } catch (\Throwable $th) {
       echo "Erreur de suppression du produit  : ".$th->getMessage();
    }
    }



}
?>