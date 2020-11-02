<?php


 /*session_start();
include "../security/secure.php";
include "../includes/database.php";*/

$id_emprunter=$_GET['id'];

try{
	

$sql = "DELETE * FROM emprunter WHERE id_emprunter='$id_emprunter'";
$sth = $dbco->prepare($sql);
$sth->execute();
       
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
header('Location:../admin/starter.php?page=emprunterlist'); 
?>