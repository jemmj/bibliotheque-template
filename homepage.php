<?php
    //On démarre une nouvelle session
    @session_start();
    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
     *de caractères vide*/



    ?>
    <!DOCTYPE html>
<html>
    
    <head>
        			<meta charset="utf-8" />
      				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      				<title>Template </title>
      			
                    <link rel="stylesheet" href="assets/owl.theme.default.min.css"/>
<<<<<<< HEAD
        <script src="js/jquery-3.3.1.min.js"></script>        
      <link href="css/template.css" rel="stylesheet"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script	 
=======
                
      <link href="css/template.css" rel="stylesheet"/>
    		 
>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
           		
​
    </head>
    
    <body>
<?php

//include "template/menu.php";
?>

   <div class="container">        
<?php

require_once 'includes/functions.php';
@$page=securisation($_GET["page"]);
 if($page =="" || $page=="content")
 {
	 //echo $page;
    include 'template/content.php' ;
 }
 
 else if($page== "livre"){
	
	include "template/livre.php";
 }
 else if($page== "emprunter"){
  
  include "template/ficheemprunt.php";
 }
//require_once 'template/footer.php' ;
   

?>
 
 </div>


</body>

	







</html>