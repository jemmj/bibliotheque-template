<?php
session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/functions.php";

  if(@$_POST['id_editeur']!=""){





		
			$nom=$_POST['nom'];
			$adresse=$_POST['adresse'];
					

try{



$sql = "UPDATE editeur set nom=:nom,adresse=:adresse WHERE id_editeur=:id_editeur";
$params=array(

                                    ':nom' => $nom,
                                    ':adresse' => $adresse,
                                    									);

$sth->execute($params);
 
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

 }




 header('Location:../admin/starter.php?page=editeurlist');
?>
