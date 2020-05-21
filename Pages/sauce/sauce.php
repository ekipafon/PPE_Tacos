<!DOCTYPE HTML>
<html lang="fr">
    
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css" media="all">
    </head>
    
    <body>
        
        <div class="enonce">
            
             Tu as choisi un Tacos 
             <?php echo htmlspecialchars($_POST["nom"]); 
             
            if($_POST["nom"] == "M")
                {
                echo ", une viande au choix"; 
                 
                } 
            elseif ($_POST["nom"] == "L") 
                { 
                echo ", deux viandes aux choix"; 
                } 
            else
               {
                echo ", trois viandes aux choix";
                
               }
              
            
            if(isset($_POST['nomViande']))            
            {
                foreach($_POST['nomViande'] as $valeur)
                {
                    echo $valeur .", " ;
                }
                
            }
             ?>
        </div>