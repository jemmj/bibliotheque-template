<?php
@session_start();
include "../security/secure.php";
include "../includes/database.php";
    
   
            
   if(@$_POST['nom']!="" && @$_POST['prenom']!="" && @$_POST['adresse']!="" ){

          
        //--------database parameters
           
        //----forms informations
            
        

            $nom=$_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse=$_POST['adresse'];
       

            
            
           try{
     
       
 $sql = "INSERT INTO client(nom,prenom,adresse) 
 VALUES (:nom,:prenom,:adresse)";
       
                   $sth = $dbco->prepare($sql);    
              //** echo 'Connexion réussie';
          
            $params=array(
              ':nom' => $nom,
                ':prenom' => $prenom,
                 ':adresse' =>$adresse);
      
            
                $sth->execute($params);
                    
      
        
          
                                    
          //$id_publier=$conn->lastInsertId();
             
				
                //$conn->execute($sql);
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

 header('Location:../admin/starter.php?page=clientlist');
        ?>
