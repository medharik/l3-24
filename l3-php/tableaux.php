<?php 
//les tableaux : ensemble dynamique de donnees 
$t2=array(12,"ali",9000.5);

$t1=[0=>12,1=>"ali",9000.5];//   $key=>$value
$t1[3]="youssef";
$t1[3]="RIM";
$t1[]=5000;// push : ajouter a la fin du tableau
$t1[100]="ADIL";
$t1[10]="messi";
$t1[]="MERIEM";
unset($t1[3]);
print_r($t1);

//parcourir un  tableau : 
// for ($i=0; $i <7 ; $i++) { 
//     if(!empty($t1[$i]))
//    echo "<h5>l'element $i :  est $t1[$i] </h5>";
// }
foreach ($t1 as  $k=>$v) {
echo "<h6>$k : $v</h6>";
}

$t2=[13,18,-1,"hp","dell",8.5];
echo "<br/>A ".$t2[0];//13
echo "<br/>B ".$t2[5];//8.5
echo "<br/>B ".$t2[6];//erreur : undefined offset (position)
$t2[]=9;//push 

echo "<br/>C ".count($t2);//7
echo "<br/>D ".$t2[count($t2)-1];//9
unset($t2[1]);
$t2[0]=5;
foreach ($t2 as $key => $value) {
    echo "<h3>$key est $value</h3>";
}


?>