<?php
    class Modele
    {
        private static $pdo ; //php data object : variable pour se conneceter a la BDD
        public static function connexion ()

        {
            try{
                Modele::$pdo = new PDO ("mysql:host=localhost:3306;dbname=cfievents","root","1004962012");
            }
            catch(PDOexception $exp){
                    echo "Erreur de connexion a la bdd";
                    echo $exp->getMessage () ; 
            }

        }
        public static function selectAllPortes (){
            $requete = "select * from porte";
            Modele::connexion ();
            $select = Modele::$pdo->prepare ($requete);
            $select->execute ();
            $resultats = $select->fetchAll();
            return $resultats;
        }
    }
?>
