<?php
    include("DTO/PanierDTO.php");
    
    class PanierDAO
    {
        public static function getPanier($idPanier)
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Panier WHERE idPanier = ?");
            $state->bindParam(1,$idPanier);
            $state->execute();
            $resultat = $state->fetchAll();
            
            foreach ($resultat as $ligneResultat) 
            {
                $panier = new PanierDTO();
                $panier->setIdPanier($ligneResultat["idPanier"]);
                $panier->setIdTacos($ligneResultat["idTacos"]);
            }
        }
        
        public static function getAllPanier()
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Panier");
            $state->execute();
            $resultat = $state->fetchAll();
            $tab = array();
            
            foreach ($resultat as $ligneResultat) 
            {
                $panier = new PanierDTO();
                $panier->setIdPanier($ligneResultat["idPanier"]);
                $panier->setIdTacos($ligneResultat["idTacos"]);
                $tab[]=$panier;
            }
            return $tab;
        }
        
        public static function deletePanier ($idPanier)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("DELETE FROM Panier WHERE idPanier = ?");
            $state->bindParam(1, $idPanier);
            $state->execute();             
        }
        
        public static function insertPanier($panier)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("INSERT INTO Panier (idTacos) VALUES (?) ");
            $state->bindParam(1, $panier->getIdTacos);
            $state->execute();          
        }
        
        public static function updatePanier ($panier)
        {
            $bdd = DataBaseLinker::getConnexion();
            $state = $bdd->prepare("UPDATE Panier SET idTacos = ?");
            $state->bindParam(1, $panier->getIdTacos);
            $state->execute();       
        }
    }

