<?php

    class ClientDTO
    {
        private $idClient;
        private $prenom;
        private $nom;
        private $adresse;
        
        function getIdClient() {
            return $this->idClient;
        }

        function getPrenom() {
            return $this->prenom;
        }

        function getNom() {
            return $this->nom;
        }

        function getAdresse() {
            return $this->adresse;
        }

        function setIdClient($idClient) {
            $this->idClient = $idClient;
        }

        function setPrenom($prenom) {
            $this->prenom = $prenom;
        }

        function setNom($nom) {
            $this->nom = $nom;
        }

        function setAdresse($adresse) {
            $this->adresse = $adresse;
        }
    }   
