<?php 
include "Categorie.class.php";
//instancier la classe Produit (pour construire un objet de type produit )
// $hp=new Produit("acer 5",5000);
// // $produit1->afficher();
// // $produit1->ajouter();
// // Produit::supprimer(4);
// // $hp->modifier(3);
// // $produits=Produit::all();
// // print_r($produits[0]);
// $produit=Produit::find(2);
// print_r($produit->libelle);
$eletro=new Categorie("eletromenager");
Categorie::supprimer(1);

?>