<?php


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
    public function testForm()
    {
        
            $host="localhost;dbname=PPE_TACOS;charset=utf8";
            $username = "root";
            $password = "root";
            $database = "PPE_TACOS";
            

            $nomSauce = $_POST["nomSauce"]; 


           
            $mysqli = new mysqli($host, $username, $password, $database);

 
            $statement = $mysqli->prepare("INSERT INTO Sauce (nomSauce) VALUES(?)"); 
  
            $statement->bind_param($nomSauce); 

            
    }
    
    
}