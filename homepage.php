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
                
      <link href="css/template.css" rel="stylesheet"/>
    		 
           		
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