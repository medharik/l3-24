<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau produit</title>
</head>
<body>
<?php include_once "menu.php";?>

    <h2>Nouveau produit</h2>

    <form action="store.php" method="post">
        <input type="text" name="libelle" placeholder="Libellé du produit">
        <input type="text" name="prix" placeholder="Prix du produit">
        <button>Ajouter le produit</button>
    </form>
</body>
</html>