<?php 

class Crud{
    public static $table;
    public static function supprimer($id)  {
        try {
            $cnx=  Utils::connecter_db();
            $rp=$cnx->prepare( "delete from ".self::$table." where id=?" );
            $rp->execute([$id]);
        } catch (\Throwable $th) {
           echo "Erreur de suppression   : ".$th->getMessage();
        }
        }


        public static  function all()  {
            try {
                $cnx=  Utils::connecter_db();
                $rp=$cnx->prepare( "select * from ".self::$table );
                $rp->execute();
                return $rp->fetchAll();
            } catch (\Throwable $th) {
               echo "Erreur de seelction   : ".$th->getMessage();
            }
            }
    
    
    //rechercher un categorie par id
        public static  function find($id)  {
            try {
                $cnx=  Utils::connecter_db();
                $rp=$cnx->prepare( "select * from ".self::$table." where id=?" );
                $rp->execute([$id]);
                return $rp->fetch();
            } catch (\Throwable $th) {
               echo "Erreur de selction   : ".$th->getMessage();
            
            }
    
    }




}