<?php
    include("DTO/ClientDTO.php");

    class ClientDAO
    {
        public static function getClient($idClient)
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Client WHERE idClient = ?");
            $state->bindParam(1,$idClient);
            $state->execute();
            $resultat = $state->fetchAll();
            
            foreach ($resultat as $ligneResultat) 
            {
                $client = new ClientDTO();
                $client->setIdClient($ligneResultat["idClient"]);
                $client->setPrenom($ligneResultat["prenom"]);
                $client->setNom($ligneResultat["nom"]);
                $client->setAdresse($ligneResultat["adresse"]);
            }
        }
        
        public static function getAllClient()
        {
            $co = DatabaseLinker::getConnexion();
            $state = $co->prepare("SELECT * FROM Client");
            $state->execute();
            $resultat = $state->fetchAll();
            $tab = array();
            
            foreach ($resultat as $ligneResultat) 
            {
                $client = new ClientDTO();
                $client->setIdClient($ligneResultat["idClient"]);
                $client->setPrenom($ligneResultat["prenom"]);
                $client->setNom($ligneResultat["nom"]);
                $client->setAdresse($ligneResultat["adresse"]);
                $tab[]=$client;
            }
            return $tab;
        }
        
        public static function deleteClient ($idClient)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("DELETE FROM Client WHERE idClient = ?");
            $state->bindParam(1, $idClient);
            $state->execute();             
        }
        
        public static function insertClient($client)
        {
            $bdd= DataBaseLinker::getConnexion();

            $state = $bdd->prepare("INSERT INTO Client (nom, prenom, adresse) VALUES (?,?,?) ");
            $state->bindParam(1, $client->getNom);
            $state->bindParam(2, $client->getPrenom);
            $state->bindParam(3, $client->getAdresse);
            $state->execute();          
        }
        
        public static function updateClient ($client)
        {
            $bdd = DataBaseLinker::getConnexion();
            $state = $bdd->prepare("UPDATE Client SET nom = ?, prenom = ?, adresse = ?");
            $state->bindParam(1, $client->getNom);
            $state->bindParam(2, $client->getPrenom);
            $state->bindParam(3, $client->getAdresse);
            $state->execute();       
        }
    }

