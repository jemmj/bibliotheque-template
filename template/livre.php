<?php
include "includes/database.php";
include "includes/define.php";

if(@$_GET['id']!=""){
$id_livre=$_GET['id'];


$sql = "SELECT livre.titre,livre.genre,livre.logo,livre.prix,livre.page,livre.description,auteur.nom as auteur_nom,editeur.nom as editeur_nom,publier.date_publication 
		
		  FROM livre,publier,auteur,editeur 
		  WHERE publier.id_livre=livre.id_livre AND publier.id_auteur=auteur.id_auteur 
		  AND publier.id_editeur=editeur.id_editeur AND livre.id_livre=$id_livre";
$sth = $dbco->prepare($sql);
<<<<<<< HEAD
 $sth->execute();
 
=======


>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
$result = $sth->fetch(PDO::FETCH_ASSOC);




$titre=$result['titre'];
$genre=$result['genre'];
$logo=$result['logo'];
$prix=$result['prix'];
$page=$result['page'];
$description=$result['description'];
$auteur_nom=$result['auteur_nom'];
$editeur_nom=$result['editeur_nom'];
$date_publication=$result['date_publication'];
<<<<<<< HEAD


 
=======
 $sth->execute();  
>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
}   
		  
?>


<<<<<<< HEAD
   <input id="search_livre">Rechercher</input>
=======
   <input id="searchlivre">Rechercher</input>
>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c

   <div class="container">
<div class="row">
<div class="col-12">
          <div class="card livrecard">
		  <div class="row">
		  <div class="col-8">
		  
<<<<<<< HEAD
          <img class="card-img-left" src="uploads/<?php echo $logo;?>"alt="card image" >
=======
          <img class="card-img-left" src="uploads/"alt="Card image" ><?php echo $logo;?>
>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
		  </div>
		  <div class="col-8">
           <div class="card-body">
          <h5 class="card-title">  <?php echo $titre;?></h5>
          <h5 class="card-title">  <?php echo $genre;?></h5>
          <h5 class="card-title">  <?php echo $prix;?></h5>
          <h5 class="card-title">  <?php echo $page;?></h5>
          <h5 class="card-title">  <?php echo $description;?></h5>
<<<<<<< HEAD
          <p class="card-text"> <?php echo $auteur_nom;?> </p>
		   <p class="card-text"><?php echo $editeur_nom;?> </p>
		  <hr>
         <p class="card-text"><small class="text-muted"><?php echo $date_publication;?></small></p>
          <a href="emprunter/emprunterlist.php"class="btn btn-success">Emprunter</a>
=======
          <p class="card-text"> <?php echo $auteur_nom;?> 
		  </p>
		   <p class="card-text"><?php echo $editeur_nom;?> 
		  </p>
		  <hr>
         <p class="card-text"><small class="text-muted"><?php echo $date_publication;?></small></p>
          <a href="emprunterlist.php"class="btn btn-success">Emprunter</a>
>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
		  </div>
       
	   </div>
</div>
</div>
	</div>
</div>
	
<<<<<<< HEAD
   
=======
 <form>
      <input type="text" name="client" id="nom_client" />
</form>   
>>>>>>> 0f25d363c6698f5c84c8fc2b6f887d67ee68559c
		

		