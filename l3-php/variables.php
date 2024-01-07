<?php 
//php a un typage faible / dynamique 
$a=10;

$b=$a;//passage par valeur 
$a=20;
$c=&$a;//passage par adresse(reference)
$c=8;
$a="90";
$age=10.5;
$age="test";
$maj=($age>=18);
// echo "a est $a, b est $b , c est $c  , maj est $maj <br>";
// echo gettype($age);
var_dump($age,$a);



?>