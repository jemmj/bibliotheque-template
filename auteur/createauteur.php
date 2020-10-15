<?php
@session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/functions.php";
    
   
            
   if(@$_POST['nom']!="" && @$_POST['prenom']!="" && @$_POST['nationalite']!="" ){

          
        //--------database parameters
           
        //----forms informations
            
                    $nom=$_POST['nom'];
        $prenom = $_POST['prenom'];
        $nationalite=$_POST['nationalite'];
       

            
            
           try{

            
                        $sql = "INSERT INTO auteur(nom,prenom,nationalite) VALUE (:nom,:prenom,:nationalite)";
                    
                $sth= $dbco->prepare( $sql);
                $params=array(
        
                                    ':nom' => $nom,
                                    ':prenom' => $prenom,
                                    ':nationalite' => $nationalite
                                  );
          
               $sth->execute($params); 
               echo 'Entree ajoutee dans la table';                     
          //$id_publier=$conn->lastInsertId();
            
				                  //$conn->execute($sql);
               

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


    header('Location:../admin/starter.php?page=auteurlist'); 
        ?>
