<?php 
include_once "functions.php";
$id=$_GET['id'];
supprimer_produit($id);
home();?>