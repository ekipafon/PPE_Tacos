<?php

include("DAO/ViandeDAO.php");

class ViandeController
{
    public function includeView()
    {
        include("viandes.php");
    }
    
    public function redirectUser()
    {
        header('Location: login.php?page=sauce');  
        exit;
    }
}