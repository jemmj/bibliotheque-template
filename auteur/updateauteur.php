<?php
session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/functions.php";

  if(@$_POST['id_auteur']!=""){




				
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$nationalite=$_POST['nationalite'];
						

try{

$sql = "UPDATE auteur set nom=:nom,prenom=:prenom,nationalite=:nationalite WHERE id_auteur=:auteur";

$params=array(

                                  
                                    ':nom' => $nom,
									':prenom' => $prenom,
									':nationalite' => $nationalite,									
                      				

);



$sth->execute($params);









 
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

 }

 header('Location:../admin/starter.php?page=auteurlist');
?>

