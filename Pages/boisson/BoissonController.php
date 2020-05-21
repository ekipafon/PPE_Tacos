<?php



include("DAO/BoissonDAO.php");

class BoissonController
{
    public function includeView()
    {
        include("boisson.php");
    }
    
    public function redirectUser()
    {
        header('Location: login.php?page=boisson');  
        exit;
    }
}