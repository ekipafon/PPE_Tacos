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
    
    public function testForm()
    {
        
            $host="localhost;dbname=PPE_TACOS;charset=utf8";
            $username = "root";
            $password = "root";
            $database = "PPE_TACOS";
            

            $boisson = $_POST["nomBoisson"]; 


           
            $mysqli = new mysqli($host, $username, $password, $database);

 
            $statement = $mysqli->prepare("INSERT INTO Sauce (nomBoisson) VALUES(?)"); 
  
            $statement->bind_param($boisson); 

            
    }
    
    
}