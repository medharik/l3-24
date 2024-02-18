<?php 
include_once "Utils.class.php";
class Categorie extends Crud {
public $nom;
public static  $table="categorie";

public function __construct($nom) {
    $this->nom = $nom;
}

public function afficher()  {
    echo "nom est ".$this->nom."<br>";
}


// ajouter un categorie
public function ajouter()  {
    try {
        $cnx=  Utils::connecter_db();
        $rp=$cnx->prepare( "insert into categorie (nom ) values (?)" );
        $rp->execute([$this->nom]);
    } catch (\Throwable $th) {
       echo "Erreur d'ajout du categorie  : ".$th->getMessage();
    }
    }
// supprimer un categorie

    //modifier un categorie
public  function modifier($id)  {
    try {
        $cnx=  Utils::connecter_db();
        $rp=$cnx->prepare( "update categorie set nom=? where id=?" );
        $rp->execute([$this->nom,$id]);
    } catch (\Throwable $th) {
       echo "Erreur de modification de categorie  : ".$th->getMessage();
    }
}

  


}
?>