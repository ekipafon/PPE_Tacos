<?php
    include("DTO/BoissonDTO.php");
    
    class BoissonDTO
    {
        public static function getBoisson($idBoisson)
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Boisson WHERE idBoisson = ?");
            $state->bindParam(1,$idBoisson);
            $state->execute();
            $resultat = $state->fetchAll();
            
            foreach ($resultat as $ligneResultat) 
            {
                $boisson = new BoissonDTO();
                $boisson->setIdBoisson($ligneResultat["idBoisson"]);
                $boisson->setNomBoisson($ligneResultat["nomBoisson"]);
                $boisson->setPrixBoisson($ligneResultat["prixBoisson"]);
            }
        }
        
        public static function getAllBoisson()
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Boisson");
            $state->execute();
            $resultat = $state->fetchAll();
            $tab = array();
            foreach ($resultat as $ligneResultat) 
            {
                $boisson = new BoissonDTO();
                $boisson->setIdBoisson($ligneResultat["idBoisson"]);
                $boisson->setNomBoisson($ligneResultat["nomBoisson"]);
                $boisson->setPrixBoisson($ligneResultat["prixBoisson"]);
                $tab[]=$boisson;
            }
            return $tab;
        }
        
        public static function deleteBoisson ($idBoisson)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("DELETE FROM Boisson WHERE idBoisson = ?");
            $state->bindParam(1, $idBoisson);
            $state->execute();             
        }
        
        public static function insertBoisson($boisson)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("INSERT INTO Boisson (nomBoisson, prixBoisson) VALUES (?,?) ");
            $state->bindParam(1, $boisson->getNomBoisson);
            $state->bindParam(2, $boisson->getPrixBoisson);
            $state->execute();          
        }
        
        public static function updateBoisson ($boisson)
        {
            $bdd = DataBaseLinker::getConnexion();
            $state = $bdd->prepare("UPDATE Boisson SET nomBoisson = ?, prixBoisson = ?");
            $state->bindParam(1, $boisson->getNomBoisson);
            $state->bindParam(2, $boisson->getPrixBoisson);
            $state->execute();       
        }
    }
?>

