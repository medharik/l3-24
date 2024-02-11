<?php 
// recuperer les donnees envoyer par post
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$cnx = new PDO('mysql:host=localhost;dbname=dbl3', "root", "");
$rp=$cnx->prepare( "insert into produit (libelle,prix ) values (?,?)" );
$rp->execute([$libelle,$prix]);
 echo "ajout OK";

?>