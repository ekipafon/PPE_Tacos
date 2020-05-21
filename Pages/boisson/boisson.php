<!DOCTYPE HTML>
<html lang="fr">
    
    <head>
        <link rel="stylesheet" type="text/css" href="css/boisson.css" media="all">
    </head>
    
     <body>
         
         <div class="enonce">
             Tu as choisi un Tacos <?php echo htmlspecialchars($_POST["nom"]); if($_POST["nom"] == "M") { echo ", une viande au choix"; } else { echo ", deux viandes aux choix"; } ?>
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
                <div class = buttonPanier>
                <a class="bouton" href="index.php?page=panier">Ajouter au panier</a>
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
                <div class = buttonPanier>
                <a class="bouton" href="index.php?page=panier">Ajouter au panier</a>
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
                <div class = buttonPanier>
                <a class="bouton" href="index.php?page=panier">Ajouter au panier</a>
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
                <div class = buttonPanier>
                <a class="bouton" href="index.php?page=panier">Ajouter au panier</a>
                </div>
            </div>
        </div>
     </body>
