<!DOCTYPE HTML>
<html lang="fr">
    
    <head>
        <link rel="stylesheet" type="text/css" href="css/index.css" media="all">
    </head>
    
    <body>
        
        <div class="enonce">
            Choisi la sauce de ton choix : 
            
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
            <div class = buttonPanier>
                    <form method="POST" action="index.php?page=boisson">
                        <input type="checkbox" id="idSauce" name="nomSauce[]" value="blanche"/> <label>blanche</label>
                        <input type="checkbox" id="idSauce" name="nomSauce[]" value="algerienne"/><label>algerienne</label>
                        <input type="checkbox" id="idSauce" name="nomSauce[]" value="curry"/><label>curry</label>
                        <input type="checkbox" id="idSauce" name="nomSauce[]" value="ketchup"/><label>ketchup</label>
                        <input type="submit" value="Valider"/>
                    </form>
                </div>
        
        