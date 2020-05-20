<?php

include("DAO/TacosDAO.php");

class AccueilController
{
    public function includeView()
    {
        include("accueil.php");
    }
    
    public function redirectUser()
    {
        header('Location: login.php?page=accueil');  
        exit;
    }
}