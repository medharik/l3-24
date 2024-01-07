<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo , print</title>
</head>

<body>
    <?php
    $prenom = "RIM";
    $age = 18;
    $genre = 'femme';

    $p = ($genre == "homme") ? "Mr" : "Mme"; //affectation conditionelle
    $maj = ($age > 18) ? "Majeur" : "Mineur"; //affectation conditionelle
    $e = ($genre == "femme") ? "e" : "";
    $s = ($genre == "femme") ? "elle" : "il";
    ?>
    <h2 style="">Mr. X a 20 ans</h2>
    <h2><?= $p ?>. <?php echo $prenom;  ?> a <?= $age; ?> ans,<?=$s?> est <?= $maj ?><?=$e?></h2>
    <?php 
    echo "  <h2 style=\"color:red\">$p. $prenom a $age ans</h2>";
    ?>
 
    <?php 
    echo '  <h2 style=\"color:red\">$p. $prenom a $age ans</h2>';
    ?>
    <?php 
    echo '  <h2 style="color:red">'.$p.' '. $prenom.' a '.$age.' ans</h2>';
    ?>
</body>

</html>