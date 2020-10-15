  
<div class="row"> 


<?php


include "includes/database.php";  
	  
	  
	  
	  try{
                
                $sth = $dbco->prepare(
                    "SELECT livre.titre,
                            livre.id_livre,
                            livre.genre,
                            livre.logo,
                            auteur.nom as auteur_name,
                            editeur.nom as editeur_name FROM livre,
                            publier,auteur,editeur WHERE publier.id_livre=livre.id_livre AND publier.id_auteur=auteur.id_auteur AND
                            publier.id_editeur=editeur.id_editeur"
                );
                
                $sth->execute();
                
                /*Ret

$params=array(
':id_auteur'=>$id_auteur,
':id_editeur'=>$id_editeur,
':date_publication'=>$date_publication,         
);ourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
				foreach ($result as $row => $livre) {
	 
	   ?>
      

  <div class="col-4">
        <div class="card2 livrecard">
            <img class="" src="uploads/<?php echo $livre['logo'] ?>" alt="Card image">
              <div class="card-body">
                    <h5 class="card-title"><?php echo $livre['titre'] ?></h5>
                  <p class="card-text"><?php echo $livre['genre'] ?> </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                    </p>
       
		       <a class="btn btn-success" href="?id=<?php echo $livre['id_livre'] ?>&page=livre">Détails</a>
		 
			
			</div>
        
      </div>
        
 </div>
		  

		  <?php
				}
		  
		  
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
			
       ?>    




</DIV>
</DIV>
	   
     </DIV>

   

 