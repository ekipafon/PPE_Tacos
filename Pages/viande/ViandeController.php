<?php



include("DAO/ViandeDAO.php");

class ViandeController
{
    public function includeView()
    {
        include("viande.php");
    }
    
    public function redirectUser()
    {
        header('Location: login.php?page=viande');  
        exit;
    }
}