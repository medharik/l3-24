<?php 
//recuperer l'id du produit 

$id=$_GET['id'];
$cnx = new PDO('mysql:host=localhost;dbname=dbl3', "root", "");
$rp=$cnx->prepare( "delete from produit where id=?" );
$rp->execute([$id]);
// redirection 
header("location:liste-produits.php");
?>