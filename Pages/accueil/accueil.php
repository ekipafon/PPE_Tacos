
<!DOCTYPE HTML>
<html lang="fr">
    
    
    <body>
        
        <div class="grid">
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Taille M
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/petittacos.png" alt>
                </div>
                <div class="containerTaille-desc">
                    M : une viande et une sauce au choix → 5€
                    
                    
                </div>
               

              
                

            </div>
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Taille L
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/test.png" alt>
                </div>
                <div class="containerTaille-desc">
                  L : deux viandes et deux sauces maximum → 7€
                  
                    
                </div>


               

            </div>
                
            
            <div class="containerTaille">
                <div class="containerTaille-top">
                    Taille XL
                </div>
                <div class="containerTaille-bottom">
                    <img class="image" src="Photos/gigatacos.png" alt>
                </div>
                <div class="containerTaille-desc">
                    XL : trois viandes et deux sauces maximum → 9€
                    


                </div>                

                </div>                


                </div>                
            </div>
        </div>
        
        
                <div class = buttonPanier style="font-family: Century Gothic;">
                    <form method="POST" action="index.php?page=viande">
                        <input type="radio" id="taille" name="nom" value="M"/> <label>M</label>
                        <input type="radio" id="taille" name="nom" value="L"/><label>L</label>
                        <input type="radio" id="taille" name="nom" value="XL"/><label>XL</label>
                        <input type="submit" value="Valider"/>
                    </form>
                </div>
        
   
                    


    </body>