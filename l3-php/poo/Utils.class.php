<?php 

 class Utils{

    
public static  function connecter_db() {
    try {
        $cnx = new PDO('mysql:host=localhost;dbname=dbl3', "root", "");
 //default fetch mode
 $cnx->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        //    $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (\Throwable $th) {
  echo "Erreur de connexion bd ".$th->getMessage();
    }  
  return $cnx;
  }

}

?>