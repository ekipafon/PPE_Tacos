<?php
    include("DTO/TacosDTO.php");
    
    class TacosDAO
    {
        public static function getTacos($idTacos)
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Tacos WHERE idTacos = ?");
            $state->bindParam(1,$idTacos);
            $state->execute();
            $resultat = $state->fetchAll();
            
            foreach ($resultat as $ligneResultat) 
            {
                $tacos = new TacosDTO();
                $tacos->setIdTacos($ligneResultat["idTacos"]);
                $tacos->setTaille($ligneResultat["taille"]);
                $tacos->setPrixTacos($ligneResultat["prixTacos"]);
                $tacos->setIdViande($ligneResultat["idViande"]);
                $tacos->setIdSauce($ligneResultat["idSauce"]);
            }
        }
        
        public static function getAllTacos()
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Tacos");
            $state->execute();
            $resultat = $state->fetchAll();
            $tab = array();
            
            foreach ($resultat as $ligneResultat) 
            {
                $tacos = new TacosDTO();
                $tacos->setIdTacos($ligneResultat["idTacos"]);
                $tacos->setTaille($ligneResultat["taille"]);
                $tacos->setPrixTacos($ligneResultat["prixTacos"]);
                $tacos->setIdViande($ligneResultat["idViande"]);
                $tacos->setIdSauce($ligneResultat["idSauce"]);
                $tab[]=$tacos;
            }
            return $tab;
        }
        
        public static function deleteTacos ($idTacos)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("DELETE FROM Tacos WHERE idTacos = ?");
            $state->bindParam(1, $idTacos);
            $state->execute();             
        }
        
        public static function insertTacos ($tacos)
        {
            $bdd = DataBaseLinker::getConnexion();

            $state = $bdd->prepare("INSERT INTO Tacos (taille, prixTacos, idViande, idSauce) VALUES (?,?,?,?) ");
            $state->bindParam(1, $tacos->getTaille);
            $state->bindParam(2, $tacos->getPrixTacos);
            $state->bindParam(3, $tacos->getIdViande);
            $state->bindParam(4, $tacos->getIdSauce);
            $state->execute();          
        }
        
        public static function updateTacos ($tacos)
        {
            $bdd = DataBaseLinker::getConnexion();
            $state = $bdd->prepare("UPDATE Tacos SET taille = ?, prixTacos = ?, idViande = ?, idSauce = ?");
            $state->bindParam(1, $tacos->getTaille);
            $state->bindParam(2, $tacos->getPrixTacos);
            $state->bindParam(3, $tacos->getIdViande);
            $state->bindParam(4, $tacos->getIdSauce);
            $state->execute();       
        }
      
    }

