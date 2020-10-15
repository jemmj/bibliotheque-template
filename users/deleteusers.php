<?php
session_start();
include "../security/secure.php";
include "../includes/database.php";



$id_users=$_GET['id'];

try{
	


$sql = "DELETE FROM Users WHERE id_users='$id_users'";
$sth = $dbco->prepare($sql);
$sth->execute();
  header('Location:userlist.php');      
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
?>