<?php

    class ViandeDTO
    {
        private $idViande;
        private $nomViance;

        function getIdViande() {
            return $this->idViande;
        }

        function getNomViance() {
            return $this->nomViance;
        }

        function setIdViande($idViande) {
            $this->idViande = $idViande;
        }

        function setNomViance($nomViance) {
            $this->nomViance = $nomViance;
        }
    }