<?php

@session_start();
 include "../security/secure.php";
  include "../includes/database.php";
include "../includes/functions.php";  
   
            
   if(@$_POST['nom']!="" && @$_POST['adresse']){

          
        //--------database parameters
           
        //----forms informations
            
        
            
            $nom=$_POST['nom'];
        $adresse = $_POST['adresse'];
        
       

            
            
           try{
       
       
       
                      
          
            
                        $sql = "INSERT INTO editeur(nom,adresse) VALUE (:nom,:adresse)";
                    
                $sth= $dbco->prepare( $sql);
               $params=array(
        
                                    ':nom' => $nom,
                                    ':adresse' => $adresse,
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
    

    header('Location:../admin/starter.php?page=editeurlist'); 
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/

        ?>
