<?php 
    include("tools/DataBaseLinker.php");
	if (empty($_SESSION))
	{
		session_name("PPE_TACOS");
		session_start();
	}
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
	
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/general.css" media="all"/>
		<link rel="icon" type="image/png" href="images/icone.png"/>

		<meta charset="utf-8" />
		<title>TACOS MARKET</title>		
	</head>
	<body>


		<div class="page-container">

			<div class="page-content">
	<?php
                        
			if(!empty($_GET['page'])) 
			{
				$page = $_GET['page'];
			}
			else
			{
				$page = "accueil";
                                
			}

			switch($page)
			{
                                    case "accueil" : 

					include("Pages/accueil/AccueilController.php");

					$instanceController = new AccueilController();
					$instanceController->includeView();

					break;
                                
<<<<<<< Updated upstream
                                case "boisson" :
                                        
                                        include("Pages/boisson/BoissonController.php");
                                    
                                        $boissonController = new BoissonController();
                                        $boissonController->includeView();
                                        
                                        break;
                                    
                                    
                                case "viande" :

                                    include("Pages/viande/ViandeController.php");

                                    $viandeController = new ViandeController();
                                    $viandeController->includeView();

                                    break;
                                    
                                
                                case "sauce" :

                                    include("Pages/sauce/SauceController.php");

                                    $sauceController = new SauceController();
                                    $sauceController->includeView();

                                    break;
                                    
                                    
                                case "panier": 
                                    
                                        include("Pages/panier/PanierController.php");
                                        
                                        $panierController = new PanierController();
                                        $panierController->includeView();
=======
                                    case "viandes": 
>>>>>>> Stashed changes

                                            include("Pages/Viande/ViandeController.php");

                                            $viandeController = new ViandeController();
                                            $viandeController->includeViews();

                                    default: 
                                            break;
			}

	?>		
			</div>
		</div>

	</body>
</html>
