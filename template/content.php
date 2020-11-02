<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="/web/js/jquery-1.7.2.min.js"></script>

<div class='row'>
<div class='col'>
	<form class="form-inline my-2 my-lg-0">
			<input id='search_livre' class="form-control mr-sm-2" type="search" placeholder="Rechercher livre" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</div>
		
<?php

include "includes/database.php";
  

	 
	  try{

$sth = $dbco->prepare("select distinct genre FROM livre");
$sth->execute();
$listeGenres= $sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($listeGenres as $grow => $genre) {
	echo '<div class="page-header">';
	echo '<h1>';
	echo $genre["genre"];
	echo '</h1>';
    echo '</div>';
//echo $genre["genre"];
echo "<div class='container'> <div class='row'>";



$sth = $dbco->prepare("SELECT livre.titre,livre.id_livre,livre.genre,livre.logo,livre.description,livre.prix,livre.page,auteur.nom as autor_name,editeur.nom as editor_name
FROM livre,publier,auteur,editeur
WHERE publier.id_livre=livre.id_livre
AND publier.id_auteur=auteur.id_auteur
AND publier.id_editeur=editeur.id_editeur and livre.genre=:genre");

$param=array("genre"=>$genre["genre"]);
$sth->execute($param);

$result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
        foreach ($result as $row => $livre) {

	   ?>
      
<div class="container">
  <div class="col-4">
        <div class="card2 livrecard">
            <img class="" src="uploads/<?php echo $livre['logo'] ?>" alt="Card image">
              <div class="card-body">
                    <h5 class="card-title"><?php echo $livre['titre'] ?></h5>
                  <p class="card-text"><?php echo $livre['genre'] ?> </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                    </p>

       
		       <a  href="?id=<?php echo $livre['id_livre'] ?>&page=livre"class="btn btn-success">Détails</a>
		 
			
			</div>
        
      </div>
        
 </div>
</div>
	

<script>



$( document ).ready(function() {




$("#search_livre").autocomplete({
source: "livre/livreapi.php",
select: function( event, ui ) {
event.preventDefault();
$("#search_livre").val(ui.item.value);
},

});
});


</script>
  

		  <?php
				}
		     echo'</div>';
        echo'</div>';

}
		  
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
			
       ?>    




</DIV>
</DIV>
	   
     </DIV>

   

 