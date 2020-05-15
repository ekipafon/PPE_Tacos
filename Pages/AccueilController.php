<?php

include("DAO/TacosDAO.php");

 class AccueilController
 {
    public function includeView()
    {
        include("accueil.php");
    }

    public function authenticate($identifiant, $mdp)
    {        
        $chasseur = ChasseurDePrimeDAO::findChasseurWithMdpAndIdentifiant($identifiant, $mdp);
        $connex=false;
        
        if($chasseur!=null)
        {
            $_SESSION["login"]=$identifiant;
            $connex = true;
        }
        
        return $connex;
    }
    
    public function redirectUser()
    {
        header('Location: login.php?page=viewAvis');  
        exit;
    }
 }