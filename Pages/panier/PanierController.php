<?php



include("DAO/PanierDAO.php");

class PanierController
{
    public function includeView()
    {
        include("panier.php");
    }
    
    public function redirectUser()
    {
        header('Location: login.php?page=panier');  
        exit;
    }
}   