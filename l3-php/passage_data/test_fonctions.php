<?php 
include_once "les_fonctions.php";
$maj=majeur(19);
if ($maj==true) {
echo "Majeur";
} else {

    echo "Mineur";
}

echo "<br>";

if (majeur(19)) {
    echo "Majeur";
    } else {
    
        echo "Mineur";
    }
    echo "<br>";
    
    echo  (majeur(16)) ? "Majeur" : "mineur " ;


    $x=100;
    $y=40;
    $s=ajouter($y,$x);
    echo "<h2>la somme de $x et $y est $s</h2>";


    $t=[12,4,6]; //  [12,4,6] => doubler($x)=> [24,8,12]
// $double=array_map("doubler",$t);
// utilisation d'une fonction lambda (anonyme) ou closure
$double=array_map(function ($v){ return 2*$v;},$t);
$prenom=["reda","ali","zineb"];
function mettre_maj($n){ 
    return strtoupper($n);
}
$fct= fn($x)=> strtoupper($x);
$maj=array_map($fct,$prenom);

print_r($prenom);
print_r($maj);
function comparer($a,$b)  {
    if ($a==$b) {
       return 0;
    }
    else if($a<$b) return 1;
    else return -1;
}
function comparer_chaine($a,$b)  {
    if (strcmp($a,$b)==0) {
       return 0;
    }
    else if(strcmp($a,$b)<0) return 1;
    else return -1;
}
usort($prenom,"comparer_chaine");
print_r($prenom);