<<<<<<< HEAD
<?php 
@session_start();
 
 include "../includes/database.php";
  include "../includes/functions.php";
  $id_livre=$_POST['id_livre'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $telephone=$_POST['telephone'];
  $dateemprunt = date("Y-m-d H:i:s");
				$paramsClient=array(':nom' => $nom,
				':prenom' => $prenom,
				 ':telephone'=>$telephone);
				 
				$sql = "INSERT INTO Client(nom,prenom,telephone) VALUE (:nom,:prenom,:telephone)";
				$anyname= $dbco->prepare( $sql);	
				
                                    
				$anyname->execute($paramsClient);
				$id_client=$dbco->lastInsertId();
				
				$paramsEmprunt=array(':id_client' => $id_client,
				':date_emprunt' => $dateemprunt,
				 ':id_livre'=>$id_livre);
				 
				$sql = "INSERT INTO emprunter(date_emprunt,id_client,id_livre) VALUE (:date_emprunt,:id_client,:id_livre)";
				$anyname= $dbco->prepare( $sql);	
				
                                    
				$anyname->execute($paramsEmprunt);
				header("Location:../homepage.php");
				
				
=======
<?php
include "../includes/database.php";  
include "../includes/define.php"; 

if(@$_POST['id_livre']!="" ){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$dateemprunt=date("Y-m-d");
 

        try{
   $sql = "INSERT INTO client(nom,prenom,telephone) VALUE (:nom,:prenom,:telephone)";
    
                 $sth= $dbco->prepare( $sql); 
$paramsclient=array(
								
                                ':nom' => $nom,
                                ':prenom' => $prenom,
                                ':telephone' => $telephone,                
                             
                  );
	$sth->execute($paramsclient);
	 $id_client=$dbco->lastInsertId();


 $sql = "INSERT INTO emprunter(dateemprunt,id_client,id_livre) VALUE (:dateemprunt,:id_client,:id_livre)";
    
                 $sth= $dbco->prepare( $sql); 
$paramsemprunt=array(
								
                                ':dateemprunt' => $dateemprunt,
                                ':id_client' => $id_client,
                                ':id_livre' => $id_livre,                
                             
                  );
	$sth->execute($paramsemprunt);
	header("location:../homepage.php");

}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}
>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
?>