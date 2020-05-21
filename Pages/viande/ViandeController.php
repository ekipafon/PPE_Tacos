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
    
    public function testForm()
    {
        
            $host="localhost;dbname=PPE_TACOS;charset=utf8";
            $username = "root";
            $password = "root";
            $database = "PPE_TACOS";
            

            $nomViande = $_POST["nomViande"]; 


           
            $mysqli = new mysqli($host, $username, $password, $database);

 
            $statement = $mysqli->prepare("INSERT INTO Viande (nomViande) VALUES(?)"); 
  
            $statement->bind_param($nomViande); 

            
    }
    
    
    
}