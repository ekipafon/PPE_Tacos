<?php

    class TacosDTO
    {
        private $idTacos;
        private $taille;
        private $prixTacos; 
        private $idViande; 
        private $idSauce;

        function getIdTacos() {
            return $this->idTacos;
        }

        function getTaille() {
            return $this->taille;
        }

        function getPrixTacos() {
            return $this->prixTacos;
        }

        function getIdViande() {
            return $this->idViande;
        }

        function getIdSauce() {
            return $this->idSauce;
        }

        function setIdTacos($idTacos) {
            $this->idTacos = $idTacos;
        }

        function setTaille($taille) {
            $this->taille = $taille;
        }

        function setPrixTacos($prixTacos) {
            $this->prixTacos = $prixTacos;
        }

        function setIdViande($idViande) {
            $this->idViande = $idViande;
        }

        function setIdSauce($idSauce) {
            $this->idSauce = $idSauce;
        }
    }

