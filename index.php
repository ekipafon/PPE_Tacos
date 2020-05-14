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

				default: 
					break;
			}

	?>		
			</div>
		</div>

	</body>
</html>
