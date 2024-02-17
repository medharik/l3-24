<?php 
include_once "functions.php";
$produits=all();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits</title>
</head>
<body>
    <?php include_once "menu.php";?>
    <h2>Liste des produits </h2>
    <table width="100%" border="1">
        <tr>
            <td>id</td>
            <td>libelle</td>
            <td>prix</td>
            <td>actions</td>
        </tr>
   <?php foreach($produits as $p) {?>    
        <tr>
            <td><?=$p['id']?></td>
            <td><?=$p['libelle']?></td>
            <td><?=$p['prix']?></td>
            <td>
                <a href="delete.php?id=<?=$p['id']?>">Supprimer</a>
                <a href="">Consulter</a>
                <a href="">Modifier</a>
            </td>
        </tr>
<?php }?>
    </table>
</body>
</html>