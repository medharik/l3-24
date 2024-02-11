<?php 
$cnx = new PDO('mysql:host=localhost;dbname=dbl3', "root", "");
$rp=$cnx->prepare( "select * from produit order by id desc " );
$rp->execute();
$produits=$rp->fetchAll(PDO::FETCH_ASSOC);
// print_r($produits);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste de produits</title>
</head>
<body >
    <?php include "menu.php";?>
    <h2>Liste des produits </h2>
    <table width="100%" border="1">
        <tr>
            <td>id</td>
            <td>Libelle</td>
            <td>prix</td>
            <td>Actions</td>
        </tr>
        <?php foreach($produits as $p){?>
        <tr>
            <td><?=$p['id'];?></td>
            <td><?=$p['libelle'];?></td>
            <td><?=$p['prix'];?></td>
            <td>
                <a  onclick="return confirm('supprimer?')"  href="delete.php?id=<?=$p['id'];?>">Supprimer</a>
                <a href="show.php?id=<?=$p['id'];?>">Consulter</a>
        </td>
        </tr>
        <?php }?>
    </table>

</body>
</html>