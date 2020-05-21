<?php

<<<<<<< HEAD


=======
>>>>>>> master
include("DAO/SauceDAO.php");

class SauceController
{
    public function includeView()
    {
        include("sauce.php");
    }
    
    public function redirectUser()
    {
        header('Location: login.php?page=sauce');  
        exit;
    }
}