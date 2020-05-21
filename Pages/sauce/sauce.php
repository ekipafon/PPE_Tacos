<!DOCTYPE HTML>
<html lang="fr">
    
    
    <body style="background: #F8F8FF;">
        
       <div class="enonce" style="font-family: Century Gothic;justify-content: center;display: flex;">

            <br>
            Tu as choisi un Tacos 
            <?php       
             
            echo htmlspecialchars($_POST["nom"] . " avec "); 
            
               
            
            if(isset($_POST['nomViande']))            
            {
                foreach($_POST['nomViande'] as $valeur)
                {
                    echo $valeur .", " ;
                }
                
            }
             
            
            if($_POST["nom"] == "M")
                {
                echo "choisi une sauce :"; 
                 
                } 

            else
               {
                echo "choisi deux sauces :";
                
               }
               
            ?>
            
        </div>

           
            
        </div>
        
        <div class="grid">
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Sauce blanche
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/blanche.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Blanche
                </div>

            </div>
            
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Sauce algérienne
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/algerienne.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Algérienne
                </div>

            </div>
            
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Sauce Curry 
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/curry.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Curry
                </div>

            </div>
            
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Sauce ketchup
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/ketchup.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Ketchup
                </div> 

            </div>
        </div>
            <div class = buttonPanier style="font-family: Century Gothic;">
                    <form method="POST" action="index.php?page=boisson">
                        <input type="hidden" name="nom" value="<?php echo $_POST['nom']; ?>" />
                        <input type="checkbox" id="idSauce" name="nomSauce[]" value="blanche"/> <label>blanche</label>
                        <input type="checkbox" id="idSauce" name="nomSauce[]" value="algerienne"/><label>algerienne</label>
                        <input type="checkbox" id="idSauce" name="nomSauce[]" value="curry"/><label>curry</label>
                        <input type="checkbox" id="idSauce" name="nomSauce[]" value="ketchup"/><label>ketchup</label>
                        <input type="submit" value="Valider"/>
                    </form>
                </div>
        

