<?php
    //On démarre une nouvelle session
    session_start();
    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
     *de caractères vide*/
include "../security/secure.php";


    ?>

<!DOCTYPE html>
<html>
    
    <head>
        			<meta charset="utf-8" />
      				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      				<title>FORMULAIRE</title>
      				
​					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>	
					<!--lien pour les carrousels-->
					<link rel="stylesheet" href="assets/owl.carousel.min.css"/>
                    <link rel="stylesheet" href="assets/owl.theme.default.min.css"/>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/formulaire.css"/>
    			  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
​
    </head>


<head>



</head>
<body>

<?php


//include "login.php";

//@$page=$_GET[""];

 //if($page =="" || $page=="page1"){
    // require_once 'page1.php' ;
//If($page== "contact"){
   // require 'contact.php' ;
//}
//require_once 'footer.php' ;

?> 



<h1>Formulaire HTML</h1>
        
        <form action="formulaire.php" method="post">
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="benin">Bénin</option>
                        <option value="togo">Togo</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                    </optgroup>
                </select>
            </div>        <div class="c100" id="submit">              <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
</div>

<div>
    <label for="pass">Password (8 characters minimum):</label>
    <input type="password" id="pass" name="password"
           minlength="8" required>
</div>
                <input type="submit" value="Envoyer">
  
    

            </div>
        </form>


<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $prenom = $_POST['prenom']; 
     $age = $_POST['age']; 
     $email = $_POST['email'];
     $sexe = $_POST['Sexe'];
     $pays = $_POST['pays'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'prenom : ' . $prenom . ' Age : ' . $age . ' email  : ' . $email . ' Sexe : ' .$sexe . ' pays : ' . $pays; 
     exit;
  }
?>

</body>

</html>