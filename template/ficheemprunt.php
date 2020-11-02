<?php
include "../includes/database.php";  

include "../includes/define.php"; 

if(@$_GET['id']!=""){
$id_livre=$_GET['id'];

$sql = "SELECT *  FROM livre WHERE id_livre='$id_livre'";                                             
$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);


$titre=$result['titre'];
$genre=$result['genre'];
$nom=$result['nom'];
$telephone=$result['telephone'];


 }


?>
<h1>Formulaire HTML</h1>
        
        <form method="post" action="emprunter/traitementemprunt.php">
        	<div class="c100">
                <label for="logo"> </label>
                <img class="image" src="uploads/<?php echo @$logo;?>" width=150 height=150/>
            </div>
            <input name="id_livre" type="hidden" value="<?php echo @$id_livre;?> "> 
        	<div class="c100">
                <label for="titre">titre : </label>
                <?php echo @$titre;?> 
            </div>
            <div class="c100">
                <label for="genre">genre : </label>
              <?php echo @$genre;?> 
            </div>
            <div class="c100">
                <label for="nom">Nom : </label>
            <input name="nom"> 
            </div>
            <div class="c100">
                <label for="prenom"> Prenom: </label>
                <input name="prenom"> 
            </div>
            <div class="c100">
                <label for="telephone">Telephone: </label>
               <input name="telephone"> 
            </div>

 			


                <input type="submit" value="Envoyer">
  
    

            </div>
        </form>