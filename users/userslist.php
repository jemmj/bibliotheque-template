<?php
 @session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";
?>
 <!DOCTYPE html>

<html>

    <head>

        <meta charset='utf-8'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    <body>

        <h1>Bases de données MySQL</h1> 



<table  class="table table-striped custab">  

 <?php
           
            
            try{
               
                
                
                $sth = $dbco->prepare("SELECT * FROM users");
                $sth->execute();
              $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                foreach ($resultat as $row => $users){/*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                


     echo "<tr>";
            
            echo "<td>". $users['prenom']."</td>";

            echo "<td>". $users['email']."</td>";
            echo "<td>". $users['age']."</td>";
            echo "<td>". $users['id_users']."</td>";
            echo "<td>". $users['password']."</td>";
            echo "<td>". $users['sexe']."</td>";

   echo "<td> <a class='btn btn-info btn-xs' href='?page=formupdateusers&id=".$users['id_users']."'><span class='glyphicon glyphicon-edit'></span> Edit</a>";

            echo "<td> <a class='btn btn-danger btn-xs' href='".$route['deleteusers']."?id=".$users['id_users']."'><span class='glyphicon glyphicon-remove'></span> Delete</a>";
             

    echo "</thead>";


                

             echo"<tr>";
                    echo "<td >".$user['prenom']."</td>";
                    echo "<td >".$user['email']."</td>";
                    echo "<td>".$user['age']."</td>";
                    echo "<td >".$user['sexe']."</td>";
                    echo "<td >".$user['pays']."</td>";
                    echo "<td> <a class='btn btn-info btn-xs' href='#'><span class='glyphicon glyphicon-edit'></span> Edit</a></td>";
                    echo "<td > <a class='btn btn-danger btn-xs' href='#'><span class='glyphicon glyphicon-remove'></span> delete</a></td>";
                    
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
    
    </table>
    </div>
    </body>
</html>