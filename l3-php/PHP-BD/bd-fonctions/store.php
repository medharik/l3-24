<?php 
include_once "functions.php";
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
extract($_POST);
ajouter_produit($libelle,$prix);
// home();
?>