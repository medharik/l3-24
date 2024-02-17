<?php 
include_once "functions.php";
$id=$_GET['id'];
$produit=find($id);
// print_r($produit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit produit</title>
</head>
<body>
<?php include_once "menu.php";?>

    <h2>Editer le  produit</h2>

    <form action="update.php" method="post">
        <input type="hidden" name="id"  value="<?=$produit['id']?>">
        <input value="<?=$produit['libelle']?>" type="text" name="libelle" placeholder="Libellé du produit">
        <input value="<?=$produit['prix']?>" type="text" name="prix" placeholder="Prix du produit">
        <button>Modifier le produit</button>
    </form>
</body>
</html>