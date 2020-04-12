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
				$page = "connexion";
			}

			switch($page)
			{
				case "connexion" : 

					include("Pages/connexion/ConnexionController.php");

					$instanceController = new ConnexionController();
					$instanceController->includeView();

					if(!empty($_POST['login']) && !empty($_POST['password'])) 
					{
						if ($instanceController->authenticate($_POST['login'], $_POST['password']))
						{
							echo "reussi"; //$instanceController->redirectUser();
						}
					}

					break;

				default: 
					break;
			}

	?>		
			</div>
		</div>

	</body>
</html>
