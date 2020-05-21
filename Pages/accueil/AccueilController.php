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
    
    public function testForm()
    {
        
            $host="localhost;dbname=PPE_TACOS;charset=utf8";
            $username = "root";
            $password = "root";
            $database = "PPE_TACOS";
            

            $name = $_POST["nom"]; 


           
            $mysqli = new mysqli($host, $username, $password, $database);

 
            $statement = $mysqli->prepare("INSERT INTO Taocs (taille) VALUES(?)"); 
  
            $statement->bind_param($name); 

            
    }
}