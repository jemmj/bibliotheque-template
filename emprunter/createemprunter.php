<?php

/*@session_start();
 include "../security/secure.php";
  include "../includes/database.php";
include "../includes/functions.php"; */ 
   
            
   if(@$_POST['dateemprunt']!="" && @$_POST['id_livre']!="" && @$_POST['id_client']){

          
        //--------database parameters
           
        //----forms informations
            
        
            
            $dateemprunt=$_POST['dateemprunter'];
        $id_livre=$_POST['id_livre'];
        $id_client=$_POST['id_client'];
       

            
            
           try{
       
       
       
                      
          
            
                      $sql = "INSERT INTO emprunter(dateemprunt,id_livre,id_client) VALUE (:dateemprunt,:id_livre,:id_client)";
                    
                $sth= $dbco->prepare( $sql);
               $params=array(
        
                                    ':dateemprunt' => $dateemprunt,
                                    ':id_livre' => $id_livre,
                                    ':id_client' => $id_client,
       );        
   
   $sth->execute($params); 
               echo 'Entree ajoutee dans la table';
           
               
             }
             /*   
                echo 'Entrée ajoutée dans la table';
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
                   // $conn->rollBack();
              echo "Erreur : " . $e->getMessage();
            }

    }                     
          //$id_publier=$conn->lastInsertId();
    

    header('Location:../admin/starter.php?page=emprunterlist'); 
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/

        ?>
