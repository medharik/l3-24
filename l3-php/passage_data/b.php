<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de reception des donnees des liens </title>
</head>
<body>
    
<h2>le produit choisit est <?php echo $_GET['libelle'] ?></h2>

<h2>la qte est  <?php echo (isset($_GET['qte']))?  $_GET['qte']:0; ?></h2>
<?php if(isset($_GET['prix'])) {?>
<h3>le prix est <?php echo $_GET['prix'] ;?></h3>
<?php } ?>
</body>
</html>