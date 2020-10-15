<?php
    //On démarre une nouvelle session
@session_start();
    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
     *de caractères vide*/
include "../security/secure.php";
include "../includes/database.php";
include "../includes/functions.php";
  
?>


<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>TraitementUsers</title>
      				
        <link rel="stylesheet"     href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384- Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
        
        <!--lien pour les carrousels-->
        <link rel="stylesheet" href="assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="assets/owl.theme.default.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-    awesome.min.css">
        
        <link rel="stylesheet" href="css/formulaire.css"/>
    			  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        
    </head>

    <body>

               <!--    Connexion au serveur --- 1ére MéTHODE-->
<!--
        <h1>Bases de données MySQL</h1>  
        <?php /*
        $servername = 'localhost';
        $username = 'root';
        $password = '';
            
        //On établit la connexion
        $conn = new mysqli($servername, $username, $password);
            
        //On vérifie la connexion
        if($conn->connect_error){
            die('Erreur : ' .$conn->connect_error);
        }
       echo 'Connexion réussie';
       */
?> 
-->

                <!--        Connexion au serveur MéTHODE 2-->
        
        <h1>Bases de données MySQL</h1>  
        <?php
        
        if(@$_POST['prenom']!="" && @$_POST['date']!="" && @$_POST['email']!=""&& @$_POST['']!=""&& @$_POST['email']!=""&& @$_POST['email']!=""&& @$_POST['email']!="" ){
            
        // Vérifier si le formulaire est soumis 
//        if ( @$_POST['prenom'] !=""  && @$_POST['nom'] !="" ) {
            /* récupérer les données du formulaire en utilisant 
            la valeur des attributs name comme clé 
            */
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $date = $_POST['date']; 
            $telephone = $_POST['telephone'];
            $adresse = $_POST['adresse'];
            $pays = $_POST['pays'];
            $sexe = $_POST['sexe'];
            $email = $_POST['email'];
            $genre = $_POST['genre'];
            $pseudo = $_POST['pseudo'];
            $password = $_POST['password'];
            
            
          
            
            //On essaie de se connecter
            try{
                
               
                
            
        $sql = "INSERT INTO Users(Prenom,Nom,date,telephone,adresse,pays,sexe,genre,email,pseudo,role,password)";

                
           
                $sth= $dbco->prepare( $sql);
                $params=array(
        
                
				
                $params=array(
                    ':prenom' => $prenom,
                    ':nom' => $nom,
                    ':date' => $date,
                    ':telephone' => $telephone,
                    ':adresse' => $adresse,
                    ':pays' => $pays,
                    ':sexe' => $sexe,
                    ':genre' => $genre,
                    ':email' => $email,
                    ':pseudo' => $pseudo,
                    ':password' => $password,
                    ':role' => "admin",);
                
                $sth->execute($params);
                
               // $conn->exec($sql);
                echo 'Entrée ajoutée dans la table';
                
            }
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        } 
        
    header('Location:../admin/starter.php?page=userslist'); 
        ?>