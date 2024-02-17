<?php 
include_once "functions.php";
extract($_POST);//$id,$libelle,$prix
modifier_produit($id,$libelle,$prix);
home();

?>