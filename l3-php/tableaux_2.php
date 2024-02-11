<?php 
//TABLEAUX INDEXES (NUMEROTE A PARTIR DE 0)
$produits=["hp dv8","dell d7",'sony vaio'];
$produits[]="ACER a7";
$produits[]="iMAC";
$produits[10]="iPad";
// $produits[]="iMAC";
unset($produits[10]);
// print_r($produits);
//  echo count($produits);
$last_position=count($produits)-1;
//  echo $produits[$last_position];

// tableaux associatifs
$age=20;
// echo '$age ans ';

$ali=['nom'=>'alami','prenom'=>'ali','age'=>20];
$ali['salaire']=9000;
$ali['nom']='Doe';
 echo $ali['nom'].' '.$ali['prenom'].' a '.$ali['age'],' ans';
 echo " {$ali['nom']}   a  {$ali['age']}  ans ";

 $ali[10]="10";
 $ali[]=100;
?>
<hr>
<?php 
 foreach ($ali as $k => $v) {
    echo "<li>$k est $v</li>";
 }

?>