<?php

 session_start();
include "../security/secure.php";
include "../includes/database.php";

$id_bibliotheque=$_GET['id'];

try{
	

$sql = "DELETE FROM bilbliotheque WHERE id_bibliotheque='$id_bibliotheque'";
$sth = $dbco->prepare($sql);
$sth->execute();
 // header('Location:bibliothequelist.php');      
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
header('Location:../admin/starter.php?page=bibliothequelist');
?>