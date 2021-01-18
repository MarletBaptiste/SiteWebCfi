<?php
	require_once ("modele.php");
?>
<!DOCTYPE html>
<html>
	 <head>
	  <title>1ere page</title>
	  <meta charset="utf-8"/>
	  
	 </head>
	 
	 <body>
	 <center>
     <h1> Gestion des portes ouvertes du cfi</h1>
     <br/><br/>

     <p>
        <a href = "index.php?page=1">
            <img src ="images/logo_maker_design_app04.JPG" height="100" width ="100"></a>
        <a href = "index.php?page=2">
            <img src ="images/logo_maker_design_app04.JPG" height="100" width ="100"></a>
        <a href = "index.php?page=3">
            <img src ="images/logo_maker_design_app04.JPG" height="100" width ="100"></a>
     </p>
     
     <?php
			if (isset($_GET["page"]))
			{
				$page = $_GET["page"]; // on récupère la variable URL page 
			}else {
				$page = 1; // la page home cfi 
			}
			switch ($page) {
				case 1 : require_once ("home.php"); break; 
				case 2 : require_once ("portes.php"); break; 
				case 3 : require_once ("candidats.php"); break;
                case 4 : require_once ("inscription.php"); break;
                default : require_once ("home.php"); break;
			}
		?>
    </center>
		
	</body>
</html>
	
