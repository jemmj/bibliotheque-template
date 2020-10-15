<?php

@session_start(); 
include "../security/secure.php";
include "../includes/define.php";
include "../includes/database.php";
?>
<!DOCTYPE html>

<html>

    <head>

        <title>Editeur list</title>

        <meta charset='utf-8'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <style>
    .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
    img {
        width:50px;
        height:20px;
    }
    </style>



    </head>

    <body>

        <h1>Bases de données MySQL</h1> 


<td > <a class='btn btn-success btn-xs'href='starter.php?page=formcreateediteur'><span class='glyphicon glyphicon-add'></span> ajouter</a></td>
<table  class="table table-striped custab">  

<?php



            
            try{
               
                
                /*Sélectionne toutes les valeurs dans la table livre*/
               $sth = $dbco->prepare("SELECT * FROM editeur");
                $sth->execute();


            
                
                /*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                
   $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);

                foreach ($resultat as $row => $editeur){

             echo"<tr>";
                    echo "<td >".$editeur['nom']."</td>";
                    echo "<td >".$editeur['adresse']."</td>";
                    echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formupdateediteur&id=".$editeur['id_editeur']."'><span class='glyphicon glyphicon-edit'></span> Edit</a></td>";
                    echo "<td > <a class='btn btn-danger btn-xs'href='".$route['deleteediteur']."?id=".$editeur['id_editeur']."'><span class='glyphicon glyphicon-remove'></span> delete</a></td>";
                  echo "</tr>";


                 
                }
echo "</table>";
                
                /*print_r permet un affichage lisible des résultats,
                 *<pre> rend le tout un peu plus lisible*/
           
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                ?>

    </body>

</html>