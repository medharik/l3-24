<?php 

// CREATE TABLE produit(

//     id INT  PRIMARY KEY AUTO_INCREMENT,
//     libelle VARCHAR(100),
//     prix float
    
//     )
//PDO
// exemple d'ajout d'un produit dans une base  de donnees 
// connexion php mysql pdo
$cnx = new PDO('mysql:host=localhost;dbname=dbl3', "root", "");
//preparer la requete sql
$rp=$cnx->prepare( "select * from produit" );
//execution
$rp->execute();

$produits=$rp->fetchAll(); //recupere tout les enregistrements
print_r($produits);




?>