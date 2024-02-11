<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nouveau produit</title>
</head>

<body>
<?php include "menu.php";?>
    <h3>Nouveau produit</h3>

    <form action="store.php" method="post">
        Libelle : <input type="text" name="libelle" id="">
        Prix : <input type="number" name="prix"  max="10000"  id="">
        <button>Ajouter</button>
    </form>
</body>

</html>