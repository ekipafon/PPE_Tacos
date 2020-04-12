<?php
    include("DTO/SauceDTO.php");
    
    class SauceDAO
    {
        public static function getSauce($idSauce)
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Sauce WHERE idSauce = ?");
            $state->bindParam(1,$idSauce);
            $state->execute();
            $resultat = $state->fetchAll();
            
            foreach ($resultat as $ligneResultat) 
            {
                $sauce = new SauceDTO();
                $sauce->setIdSauce($ligneResultat["idSauce"]);
                $sauce->setNomSauce($ligneResultat["nomSauce"]);
            }
        }
        
        public static function getAllSauce()
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Sauce");
            $state->execute();
            $resultat = $state->fetchAll();
            $tab = array();
            
            foreach ($resultat as $ligneResultat) 
            {
                $sauce = new SauceDTO();
                $sauce->setIdSauce($ligneResultat["idSauce"]);
                $sauce->setNomSauce($ligneResultat["nomSauce"]);
                $tab[]=$sauce;
            }
            return $tab;
        }
        
        public static function deleteSauce ($idSauce)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("DELETE FROM Sauce WHERE idSauce = ?");
            $state->bindParam(1, $idSauce);
            $state->execute();             
        }
        
        public static function insertSauce ($sauce)
        {
            $bdd = DataBaseLinker::getConnexion();

            $state = $bdd->prepare("INSERT INTO Sauce (nomSauce) VALUES (?) ");
            $state->bindParam(1, $sauce->getNomSauce);
            $state->execute();          
        }
        
        public static function updateSauce ($sauce)
        {
            $bdd = DataBaseLinker::getConnexion();
            $state = $bdd->prepare("UPDATE Sauce SET nomSauce = ?");
            $state->bindParam(1, $sauce->getNomSauce);
            $state->execute();       
        }
        
    }

