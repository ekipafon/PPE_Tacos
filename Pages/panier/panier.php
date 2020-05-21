<!DOCTYPE HTML>
<html lang="fr">
    
    
    <body style="background: #F8F8FF;">
        
        <div class="enonce" style="font-family: Century Gothic;justify-content: center;display: flex;">
         
            <br>
            Tu as un Tacos <?php echo htmlspecialchars($_POST["nom"]);?>
            avec <?php echo htmlspecialchars($_POST["boisson"]);?>
        <?php
        
            if(isset($_POST['nomViande']))            
            {
                foreach($_POST['nomViande'] as $valeur)
                {
                    echo $valeur .", " ;
                }
                
            }
            
            if($_POST["nom"] == "M" && $_POST["boisson"] == "Aucune")
                {
                echo ", 5€"; 
                 
                } 
                
            elseif ($_POST["nom"] == "M")
                {
                echo ", 6€";
                }
            elseif ($_POST["nom"] == "L" && $_POST["boisson"] == "Aucune") 
                { 
                echo ", 7€"; 
                } 
            elseif ($_POST["nom"] == "L") 
                { 
                echo ", 8€"; 
                } 
            elseif ($_POST["nom"] == "XL" && $_POST["boisson"] == "Aucune") 
               {
                echo ", 9€";
               }
            elseif ($_POST["nom"] == "XL") 
               {
                echo ", 10€";
               }
       ?>
        </div>
            <br>
            <br>
            <div class = buttonPanier style="font-family: Century Gothic;">
                <input type="button" value="Payer">
            </div>
