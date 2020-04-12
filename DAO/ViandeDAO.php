<?php
    include("DTO/ViandeDTO.php");
    
    class ViandeDAO
    {
        public static function getViande($idViande)
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Viande WHERE idViande = ?");
            $state->bindParam(1,$idViande);
            $state->execute();
            $resultat = $state->fetchAll();
            
            foreach ($resultat as $ligneResultat) 
            {
                $viande = new ViandeDTO();
                $viande->setIdViande($ligneResultat["idViande"]);
                $viande->setTaille($ligneResultat["nomViande"]);
            }
        }
        
        public static function getAllViande()
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Viande");
            $state->execute();
            $resultat = $state->fetchAll();
            $tab = array();
            
            foreach ($resultat as $ligneResultat) 
            {
                $viande = new ViandeDTO();
                $viande->setIdViande($ligneResultat["idViande"]);
                $viande->setTaille($ligneResultat["nomViande"]);
                $tab[]=$viande;
            }
            return $tab;
        }
        
        public static function deleteViande ($idViande)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("DELETE FROM Viande WHERE idViande = ?");
            $state->bindParam(1, $idViande);
            $state->execute();             
        }
        
        public static function insertViande ($viande)
        {
            $bdd = DataBaseLinker::getConnexion();

            $state = $bdd->prepare("INSERT INTO Viande (nomViande) VALUES (?) ");
            $state->bindParam(1, $viande->getNomViande);
            $state->execute();          
        }
        
        public static function updateViande ($viande)
        {
            $bdd = DataBaseLinker::getConnexion();
            $state = $bdd->prepare("UPDATE Viande SET nomViande = ?");
            $state->bindParam(1, $viande->getNomViande);
            $state->execute();     
        }
    }

