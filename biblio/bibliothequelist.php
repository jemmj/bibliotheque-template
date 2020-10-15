<?php @session_start();
include "../security/secure.php";
include "../includes/define.php";
include "../includes/database.php";
?>
 <!DOCTYPE html>

<html>

    <head>

        <title>Cours PHP / MySQL</title>

        <meta charset='utf-8'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    <body>

        <h1>bibliotehquelist</h1> 


<td > <a class='btn btn-success btn-xs' href='starter.php?page=formcreatebibliotheque'><span class='glyphicon glyphicon-add'></span> ajouter</a></td>
<table  class="table table-striped custab">  

<?php
           
                     
 
            try{

                
                /*Sélectionne toutes les valeurs dans la table bilbliotheque*/
                $sth = $dbco->prepare("SELECT * FROM bilbliotheque");
                $sth->execute();
                
                /*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                
echo"<thead>"; 



    echo'<tr>
    <th scope="col">nom</th>
      <th scope="col">adresse</th>
      <th scope="col">telephone</th>
      
    </tr>';
             

    echo "</thead>";
    $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);

                foreach ($resultat as $row => $bibliotheque){

             echo"<tr>";
                    echo "<td >".$bibliotheque['nom']."</td>";
                    echo "<td >".$bibliotheque['adresse']."</td>";
                    echo "<td>".$bibliotheque['telephone']."</td>";
                
                    echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formupdatebibliotheque&id=".$bibliotheque['id_bibliotheque']."'><span class='glyphicon glyphicon-edit'></span> Edit</a></td>";
                    echo "<td > <a class='btn btn-danger btn-xs'href='".$route['deletebibliotheque']."?id=".$bibliotheque['id_bibliotheque']."'><span class='glyphicon glyphicon-remove'></span> delete</a></td>";
                    
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