<!DOCTYPE HTML>
<html lang="fr">
    
    
    <body style="background: #F8F8FF;">
        
        <div class="enonce" style="font-family: Century Gothic;justify-content: center;display: flex;">
             <br>
            Tu as choisi un Tacos <?php echo htmlspecialchars($_POST["nom"]); 
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
              
               
               ?>
        </div>
        
        <div class="grid">
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Viande kebab
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/kebab.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Kebab 
                </div>

            </div>
            
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Viande merguez
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/merguez.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Merguez 
                </div>

            </div>
            
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Viande nuggets
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/nuggets.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Nuggets 
                </div>

            </div>
            
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Viande cordon bleu
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/cordon.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Cordon Bleu 
                </div> 

            </div>
        </div>
            <div class = buttonPanier style="font-family: Century Gothic;">
                    <form method="POST" action="index.php?page=sauce">
                        <input type="hidden" name="nom" value="<?php echo $_POST['nom']; ?>" />
                        <input type="checkbox" id="idViande" name="nomViande[]" value="kebab"/> <label>Kebab</label>
                        <input type="checkbox" id="idViande" name="nomViande[]" value="merguez"/><label>Merguez</label>
                        <input type="checkbox" id="idViande" name="nomViande[]" value="nuggets"/><label>Nuggets</label>
                        <input type="checkbox" id="idViande" name="nomViande[]" value="cordon bleu"/><label>Cordon Bleu</label>
                        <input type="submit" value="Valider"/>
                    </form>
                </div>
