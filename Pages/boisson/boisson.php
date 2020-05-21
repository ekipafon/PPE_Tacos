<!DOCTYPE HTML>
<html lang="fr">

    <body style="background: #F8F8FF;">
         
          <div class="enonce" style="font-family: Century Gothic;justify-content: center;display: flex;">
              <br>
            Tacos taille <?php echo htmlspecialchars($_POST["nom"] . " avec ");
            
             if(isset($_POST['nomViande']))            
            {
                foreach($_POST['nomViande'] as $valeur)
                {
                    echo $valeur .", " ;
                }  
            }
            
             if(isset($_POST['nomSauce']))            
            {
                foreach($_POST['nomSauce'] as $valeur2)
                {
                    echo $valeur2 .", " ;
                }
                
            }
            
            ?>

         </div>
        
        <div class="grid">
            
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Coca Cola 33cl
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/cocacola.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Canette de Coca Cola 33cl, +1€ 
                </div>

            </div>
            
             <div class="containerTaille">
                <div class="containerTaille-top">
                    Ice Tea 33cl
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/icetea.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Canette d'Ice Tea Peche 33cl, +1€ 
                </div>

            </div>
            
             <div class="containerTaille">
                <div class="containerTaille-top">
                    Sprite 33cl
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/sprite.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Canette de Sprite 33cl, +1€ 
                </div>
            </div>
            
             <div class="containerTaille">
                <div class="containerTaille-top">
                    Tropico 33cl
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/tropico.png" alt>
                </div>
                <div class="containerTaille-desc">
                    Canette de Tropico 33cl, +1€ 
                </div>

            </div>
        </div>
         
        <div class = buttonPanier style="font-family: Century Gothic;">
            <form method="POST" action="index.php?page=panier">
                <input type="hidden" name="nom" value="<?php echo $_POST['nom']; ?>" />
                <input type="radio" id="idBoisson" name="boisson" value="Coca"/> <label>Coca cola</label>
                <input type="radio" id="idBoisson" name="boisson" value="IceTea"/><label>Ice Tea</label>
                <input type="radio" id="idBoisson" name="boisson" value="Sprite"/><label>Sprite</label>
                <input type="radio" id="idBoisson" name="boisson" value="Tropico"/><label>Tropico</label>
                <input type="radio" id="idBoisson" name="boisson" value="Aucune"/><label>Aucune</label>
                <input type="submit" value="Valider"/>
            </form>
        </div>
         
         
     </body>
