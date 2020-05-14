<?php

include("DAO/.php");

 class ConnexionController
 {
    public function includeView()
    {
        include("connexion.php");
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