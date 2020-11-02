<?php
 @session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";


$id_editeur=$_GET['id'];


$sql = "select *  FROM editeur WHERE id_editeur='$id_editeur'";


$sth=$dbco->prepare($sql);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

$nom=$result['nom'];
$adresse=$result['adresse'];
$id_editeur=$result['id_editeur'];



?>

		  	      <link rel="stylesheet" href="css/style.css">

<h1>Form update editeur</h1>

        <form action="<?php echo $route["updateediteur"]; ?>" method="post">

		<input type="hidden" id="id_editeur" name="id_editeur" value="<?php echo $id_editeur;?>">

            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="adresse" id="adresse" name="adresse" value="<?php echo $adresse;?>">
            </div>
           


            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>



        
