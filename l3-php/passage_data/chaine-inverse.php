<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<?php 

//definir une fonction  : 
function f1(){
    echo "Bonjour";
}
//appel de f1
// f1();
//definir une fonction  : 
function doubler(&$nombre)  {
    $nombre*=2;
}
$n=2;
doubler($n);//passage par adresse (reference) (fonction destrutive) 
echo "n est $n";

$t=["zineb","ali","reda"];
$tcopie=array_reverse($t);
print_r($t);
print_r($t);
function f2($x){
    $posAros=strpos($x,"@");
    $posPoint=strpos($x,".",$posAros);
    $reponse=($posAros && $posPoint)? " est un email":"n'est pas un email";
    return  $reponse;
}

function compter_char($chaine,$char_to_count)  {
    $chaine=strtoupper($chaine);
    $char_to_count=strtoupper($char_to_count);
$x_ar=str_split($chaine);
$compteur = 0 ;
foreach ($x_ar as $key => $value) {
   if($value==$char_to_count) $compteur++;
}
return $compteur;
}
//appel de f1

//recuperer le chaine recu 
$chaine=$_GET['chaine'];
$rep=f2($chaine);
$chaine_inverse=strrev($chaine);

?>
<ul>
    <li>la chaine inverse est : <?= $chaine_inverse ;?></li>
    <li>nombre de caracteres : <?=strlen($chaine)?></li>
    <li>Email : <?= urldecode("med%40yahoo.fr%3F")?>  <?=f2($chaine)?> </li>
    <li> la chaine : <?=$chaine ?> contient <?=compter_char($chaine,"o")?> o</li>
</ul>
</body>
</html>