<?php

    class PanierDTO
    {
        private $idPanier;
        private $idTacos;
        
        function getIdPanier() {
            return $this->idPanier;
        }

        function getIdTacos() {
            return $this->idTacos;
        }

        function setIdPanier($idPanier) {
            $this->idPanier = $idPanier;
        }

        function setIdTacos($idTacos) {
            $this->idTacos = $idTacos;
        }


    }
