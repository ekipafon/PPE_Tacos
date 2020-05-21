<?php 
    include("tools/DataBaseLinker.php");
	if (empty($_SESSION))
	{
		session_name("PPE_TACOS");
		session_start();
	}
?>


<?php

    include_once("Pages/header.php");
?>
	<body style="background: #F8F8FF;">

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


                                    default: 
                                            break;
			}

	?>		
			</div>
		</div>

	</body>
</html>
