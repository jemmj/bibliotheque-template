<?php
$servername = "localhost"; 
$dbname = "bd_magalijohnsonbiblio"; 
$dbuser = "root"; 
$dbpass = "";
try{
$dbco = new PDO("mysql:host=$servername;dbname=$dbname", $dbuser, $dbpass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}