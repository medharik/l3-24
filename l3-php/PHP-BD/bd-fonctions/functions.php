<?php 
// programmation modulaire/procedurale / fonctionelle
//connexion bd
function connecter_db() {
$cnx = new PDO('mysql:host=localhost;dbname=dbl3', "root", "");
return $cnx;
}

// ajouter un produit
function ajouter_produit($libelle,$prix)  {
 $cnx=   connecter_db();
 $rp=$cnx->prepare( "insert into produit (libelle,prix ) values (?,?)" );
 $rp->execute([$libelle,$prix]);
}
// ajouter_produit('hp',90000)

// supprimer un produit
function supprimer_produit($id)  {
    $cnx=   connecter_db();
    $rp=$cnx->prepare( "delete from produit where id=?" );
    $rp->execute([$id]);
   }

//modifier un produit 
function modifier_produit($id,$libelle,$prix)  {
    $cnx=   connecter_db();
    $rp=$cnx->prepare( "update produit set libelle=? , prix=? where id=?" );
    $rp->execute([$libelle,$prix,$id]);
   }

//recuperer tous les produits
function all()  {
    $cnx=   connecter_db();
    $rp=$cnx->prepare( "select * from produit order by id desc " );
    $rp->execute();
    $produits=$rp->fetchAll(PDO::FETCH_ASSOC);
    return $produits;
   }


// recuperer un produit par id

function find($id)  {
    $cnx=   connecter_db();
    $rp=$cnx->prepare( "select * from produit where id=? " );
    $rp->execute([$id]);
    $produit=$rp->fetch(PDO::FETCH_ASSOC);
    return $produit;
   }

function home()  {
    header("location:liste_produits.php");

}



?>