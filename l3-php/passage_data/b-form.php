<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de reception des donnees des forms </title>
</head>
<body>
    
<h2>le produit choisit est <?php echo $_POST['libelle'] ?></h2>

<h2>la qte est  <?php echo (isset($_POST['qte']))?  $_POST['qte']:0; ?></h2>
<?php if(isset($_POST['prix'])) {?>
<h3>le prix est <?php echo $_POST['prix'] ;?></h3>
<?php } ?>
</body>
</html>