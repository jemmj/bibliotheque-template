<?php

 session_start();
include "../security/secure.php";
include "../includes/database.php";

$id_editeur=$_GET['id'];

try{
	

$sql = "DELETE FROM editeur WHERE id_editeur='$id_editeur'";
$sth = $dbco->prepare($sql);
$sth->execute();
       
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}header('Location:../admin/starter.php?page=editeurlist'); 
?>