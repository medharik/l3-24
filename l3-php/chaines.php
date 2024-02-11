<?php 

$prenom="hicham";
echo "le prénom est :$prenom <br> ";
$l=strlen($prenom);// calculer la longueur d'une chaine de caracteres
$ar=str_split($prenom);//convertir une chaine en tableau
$ar2=explode("i",$prenom);//m,eme chose mais en se basant sur un separeteur
print_r($ar2);
echo strrev($prenom);
$prenom_en_MAJ=strtoupper($prenom);
echo $prenom_en_MAJ;
echo ucfirst($prenom);
$email="testcom@gmail.com";
// $test=strpos($email,"o",10);
echo "<br>";
echo $test;
echo "<br>";
$nom="john";
$nom_ar=str_split($nom);
$nom_ar[]="y";
print_r($nom_ar);
$nom2=join("",$nom_ar);
echo "<br>nom 2 est $nom2";
?>