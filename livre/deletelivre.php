<?php
session_start();

include "../security/secure.php";

include "../includes/database.php";


$id_livre=$_GET['id'];

try{

$sql = "select logo FROM livre WHERE id_livre='$id_livre'";
$sth = $dbco->prepare($sql);
$sth->execute();
$result=$sth->fetch(PDO::FETCH_ASSOC);
$logo=$result['logo'];
unlink("../uploads/".$logo);

$sql = "DELETE FROM publier WHERE id_livre='$id_livre'";
$sth = $dbco->prepare($sql);
$sth->execute();

$sql = "DELETE FROM livre WHERE id_livre='$id_livre'";
$sth = $dbco->prepare($sql);
$sth->execute();
 
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
 header('Location:../admin/starter.php?page=livrelist');      
?>