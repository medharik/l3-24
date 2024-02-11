<?php 
$nom="alami";
$prenom='ali';
$nom_complet="$nom $prenom";
$genre="homme";
$age=21;
// $majorite=($age>18)? "Majeur":(($age<18)?"Mineur":"JA");
//affectation conditionelle : 
$majorite=($age>18)? "Majeur":"Mineur";

$prix=90;
// ou unset($prix)  pour detruire une variable ;
$condition1=isset($prix);



// l'equivalent boolean 
$e=(bool)"";
var_dump($e);
// $x=0;
// false <=> 0,0.0,"",'',[],array() ,null,"0", empty
//true (le contraire )
if(!isset($x) ||  $x==0){
    echo "il n'y a pas encore de prix";
}else{
    echo "Le prix est $prix DHS<br>";
}
// if ($age>18) {
//     $majorite="Majeur";
// }else{
//     $majorite="Mineur";

// }
?>