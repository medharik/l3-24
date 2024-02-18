<?php 
class Produit {
public $libelle;
public $prix; 
public function __construct($libelle,$prix) {
    $this->libelle = $libelle;
    $this->prix = $prix;
}

function afficher()  {
    echo "libelle est ".$this->libelle.", prix est : ".$this->prix."<br>";
}



}

?>