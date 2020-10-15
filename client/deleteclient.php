<?php
 session_start();
include "../security/secure.php";
include "../includes/database.php";



$id_client=$_GET['id'];

try{
	

$sql = "DELETE FROM client WHERE id_client='$id_client'";
$sth = $dbco->prepare($sql);
$sth->execute();
      
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}


header('Location:../admin/starter.php?page=clientlist');
?>