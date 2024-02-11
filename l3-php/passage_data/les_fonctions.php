<?php 
// strpos("j'ai un ordinateur hp dv6","hp");

// on veux creer une fonction "majeur"  qui selon l'age retourne
// un boolean : true (si age >18) false (sinon)
function majeur($age) {
    if ($age>18) {
        return  true;
    } else {
        return false;
    }
}
//ou 
function majeur2(int $age) :bool  {
  return $age>18;   
}

//fonction ajouter  :  recoit 2 nombre
//  a ret b  et retourne  leurs somme et la met dans a
function ajouter(&$a,$b) {//a est passee par reference( c a d modifiable par la fonction)
    //b est passe par valeur (non modifibale)
    $a=$a+$b;
    return $a;
}

// echo ajouter(5,7);

function doubler($x){
    return 2*$x;
}
