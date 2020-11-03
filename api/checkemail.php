<?php


include "../security/secure.php";
include "../includes/database.php";

@$email=$_GET["email"];

$sql = "SELECT email FROM users WHERE email='$email'";
$sth = $dbco->prepare($sql);
$sth->execute();
$resultat=$sth->fetch(PDO::FETCH_ASSOC);
if($sth->rowCount()>0){
echo "KO";	
}
else
{
	echo"OK";
}

?>