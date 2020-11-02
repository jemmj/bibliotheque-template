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
?>