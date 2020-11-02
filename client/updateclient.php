<?php
@session_start();
include "../security/secure.php";
include "../includes/define.php";
include "../includes/database.php";

  if(@$_POST['id_client']!=""){


			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$adresse=$_POST['adresse'];
						

try{

$sql = "UPDATE client set id_client set nom=:nom,prenom=:prenom,adresse=:adresse WHERE id_client=:id_client";
$sth = $dbco->prepare($sql);
$params=array(

                                    ':nom' => $nom,
									':prenom' => $prenom,
									':adresse' => $adresse,				
												
                      				

);



$sth->execute($params);





}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
}
 
 header('Location:../admin/starter.php?page=clientlist');
?>