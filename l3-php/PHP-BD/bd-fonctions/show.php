<?php 
include_once "functions.php";
$id=$_GET['id'];
$produit=find($id);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informations du produit</title>
</head>
<body>
    <h2>Consulter les infos du produit </h2>
    Libelle : <?=$produit['libelle']?>
    prix : <?=$produit['prix']?>DHS
    
</body>
</html>