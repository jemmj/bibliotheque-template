<?php
include "../security/secure.php";

include "../includes/database.php";
 include "../includes/functions.php";
  if(@$_POST['id_livre']!=""){




			$id_bibliotheque=$_POST['id_bibliotheque'];			
			$titre=$_POST['titre'];
			$genre=$_POST['genre'];
			$logo=uploadfile('logo',true);//$_POST['logo'];
			echo $logo;
			$id_auteur=$_POST['id_auteur'];
			$id_editeur=$_POST['id_editeur'];
			$date_publication=$_POST['date_publication'];
			$id_livre=$_POST['id_livre'];
			

try{

$sql = "UPDATE livre set titre=:titre,genre=:genre,logo=:logo,id_bibliotheque=:id_bibliotheque WHERE id_livre=:id_livre";

$params=array(

                                    ':titre' => $titre,
                                    ':genre' => $genre,
									':id_livre' => $id_livre,
									':logo' => $logo,									
                      				':id_bibliotheque' => $id_bibliotheque
									);
$sth = $dbco->prepare($sql);
$sth->execute($params);

$params=array(':id_auteur'=>$id_auteur,
					':id_editeur'=>$id_editeur,
					':date_publication'=>$date_publication         
);
$sql = "UPDATE publier set  id_auteur=:id_auteur, id_editeur=:id_editeur, date_publication=:date_publication WHERE id_livre=$id_livre";

$sth = $dbco->prepare($sql);



$sth->execute($params);


  //header('Location:../admin/starter.php?page=livrelist');      


  //header('Location:livrelist.php');
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

 }
?>
