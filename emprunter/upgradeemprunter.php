<?php

//session_start();
//include "../security/secure.php";
//include "../includes/database.php";
//include "../includes/functions.php";

  if(@$_POST['id_emprunter']!=""){





		$id_emprunter = $_POST['id_emprunter'];
			
			$dateemprunt=$_POST['dateemprunt'];
			
					

try{



$sql = "UPDATE emprunter set dateemprunt=:dateemprunt WHERE id_emprunter=:id_emprunter";
$params=array(

                                    ':emprunter' => $emprunter,
                                    
                                    									);

$sth->execute($params);
 
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

 }




 header('Location:../admin/starter.php?page=emprunterlist');
?>
