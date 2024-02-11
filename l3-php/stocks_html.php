<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocks en ligne </title>
</head>
<body>
       <?php 
    $hp=['libelle'=>'hp dv7','prix'=>9000,'qte'=>1000];
    $dell=['libelle'=>'dell s7','prix'=>7000,'qte'=>0];
    $sony=['libelle'=>'sony vaio v9 ','prix'=>10000,'qte'=>5];
    $stocks=[0=>$hp,$dell,$sony];
    $s=(count($stocks)===1)?"":"s";
    ?>
    <h1>il y a  <?php  echo  count($stocks);?> produit<?=$s?> en stock</h1>
 
    <table border="1"  width="500" align="center" >
        <tr>
            <td>Libelle</td>
            <td>Prix</td>
            <td>Qte</td>
        </tr>
<?php foreach($stocks as $k=>$produit){  ?>
        <tr>
            <td><?= $produit['libelle']?></td>
            <td><?= $produit['prix']?></td>
            <td><?php echo $produit['qte']?></td>
        </tr>
<?php } ?>

    </table>
    
</body>
</html>