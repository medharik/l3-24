<?php 
$hp=['libelle'=>'hp dv7','prix'=>9000,'qte'=>100];
$dell=['libelle'=>'dell s7','prix'=>7000,'qte'=>0];
$sony=['libelle'=>'sony vaio v9 ','prix'=>10000,'qte'=>5];
$stocks=[$hp,$dell,$sony];
// executer le code suivant : 
//1-
echo $dell['qte'];
echo "<hr>";

//2 -
echo $hp['marque'];
echo "<hr>";

//3-
$dell['marque']='DELL';
echo $dell['marque'];
echo "<hr>";

//4- 
echo $stocks[0]['prix'];
echo "<hr>";

//5- 
echo ($stocks[1]['qte']===0)? "A":"B"; 
echo "<hr>";

//6- 
$acer=$sony;
$acer['libelle']='acer a4';
$acer['qte']-=4;
$acer['prix'] *=2;
echo "<hr>";
$stocks[]=$acer;
echo $stocks[count($stocks)-1]['libelle'];echo "<hr>";

echo $stocks[count($stocks)-1]['qte'];echo "<hr>";

echo $stocks[count($stocks)-1]['prix'];echo "<hr>";

echo "<hr>";
// 7- 
foreach ($stocks as $k => $v) {
 foreach ($v as $x => $p) {
    if($v['qte']!=0)
    echo "<h2>$x : $p </h2>";
 }
}

?>