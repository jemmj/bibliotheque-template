<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/functions.php";

  if(@$_POST['id_livre']!=""){




			$id_bibliotheque=$_POST['id_bibliotheque'];			
			$titre=$_POST['titre'];
			$genre=$_POST['genre'];
			$prix=$_POST['prix'];
			$description=$_POST['description'];
			$page=$_POST['page'];
			$logo=uploadfile('logo',true);//$_POST['logo'];
			//echo $logo;
			$id_auteur=$_POST['id_auteur'];
			$id_editeur=$_POST['id_editeur'];
			$date_publication=$_POST['date_publication'];
			$id_livre=$_POST['id_livre'];
			

try{

$sql = "UPDATE livre set titre=:titre,genre=:genre,logo=:logo,id_bibliotheque=:id_bibliotheque,prix=:prix,page=:page,description=:description WHERE id_livre=:id_livre";
<<<<<<< HEAD



=======



>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
	$sth = $dbco->prepare($sql);
            $paramslivre=array(     ':titre' => $titre,
                                    ':genre' => $genre,
									':id_livre' => $id_livre,
									':logo' => $logo,	
									':prix' => $prix,
									':page' => $page,
									':description' => $description,								
                      				':id_bibliotheque' => $id_bibliotheque
									);

$sth->execute($paramslivre);
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
try{

$sql = "UPDATE publier set  id_auteur=:id_auteur, id_editeur=:id_editeur, date_publication=:date_publication WHERE id_livre=$id_livre";


	$sth = $dbco->prepare($sql);

<<<<<<< HEAD
$params=array(
=======
$paramspublier=array(
>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
					':id_auteur'=>$id_auteur,
					':id_editeur'=>$id_editeur,
					':date_publication'=>$date_publication    );





$sth->execute($paramspublier);

  //header('Location:../admin/starter.php?page=livrelist');

  //header('Location:livrelist.php');
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

 }
 header('Location:../admin/starter.php?page=livrelist');
?>
