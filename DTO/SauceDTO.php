<?php

    class SauceDTO
    {
        private $idSauce;
        private $nomSauce;

        function getIdSauce() {
            return $this->idSauce;
        }

        function getNomSauce() {
            return $this->nomSauce;
        }

        function setIdSauce($idSauce) {
            $this->idSauce = $idSauce;
        }

        function setNomSauce($nomSauce) {
            $this->nomSauce = $nomSauce;
        }
    }
