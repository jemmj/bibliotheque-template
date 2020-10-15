<?php

 session_start();
include "../security/secure.php";
include "../includes/database.php";

  if(@$_POST['id_users']!=""){


	        $servername = 'localhost';
            $dbusername = 'root';
            $dbpassword = '';

			$id_users = $_POST['id_users'];
			$prenom=$_POST['prenom'];
			$email=$_POST['email'];
			$age=$_POST['age'];
			$sexe=$_POST['sexe'];
			$pays=$_POST['pays'];

try{


$sql = "UPDATE Users set prenom=:prenom,email=:email,age=:age,pays=:pays,sexe=:sexe WHERE id_users=:id_users";
$sth = $dbco->prepare($sql);
$params=array(

                                    ':prenom' => $prenom,
                                    ':email' => $email,
									':age' => $age,
                                    ':sexe' => $sexe,
                                    ':pays' => $pays,
                                    ':id_users' => $id_users,
									);

$sth->execute($params);
  header('Location:userlist.php');
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

 }
?>
