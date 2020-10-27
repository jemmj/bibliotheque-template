<?php
@session_start();
include "../security/secure.php";
include "../includes/database.php";
    
   
            
   if(@$_POST['titre']!="" && @$_POST['genre']!="" && @$_POST['id_bibliotheque']!="" ){

          
      
        
            $titre=$_POST['titre'];
            $genre=$_POST['genre'];
        $id_auteur = $_POST['id_auteur'];
        $id_editeur=$_POST['id_editeur'];
        $date_publication=$_POST['date_publication'];
        $prix=$_POST['prix'];
        $description=$_POST['description'];
        $page=$_POST['page'];
            //$logolivre=$_POST['logolivre'];
            $id_bibliotheque=$_POST['id_bibliotheque'];
            
             $logo=uploadfile('logo');
            
            
           try{
   
        
      
            
                        $sql = "INSERT INTO livre(titre,id_bibliotheque,genre,logo,prix,description,page) VALUE (:titre,:id_bibliotheque,:genre,:logo,:prix,:description,:page)";
                    
                $sth= $dbco->prepare( $sql);
              
        $id_livre=$dbco->lastInsertId();
        
        $paramspublier=[   
            ':date_publication'=>$date_publication];

            $sql = "INSERT INTO publier(id_livre, id_auteur, id_editeur, date_publication)
          VALUES($id_livre,$id_auteur,$id_editeur,:date_publication)";
                
             $sth=$dbco->prepare($sql);
           $sth->execute($paramspublier);
          
                                    
          //$id_publier=$conn->lastInsertId();
              @header('Location:../admin/starter.php?page=livrelist');      
 
				 // header('Location:livrelist.php');
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
        ?>
