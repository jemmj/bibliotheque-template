<?php
@session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";

$id_client=$_GET['id'];


$sql = "select *  FROM client WHERE id_client='$id_client'";

$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);
$id_client=$result['id_client'];
$nom=$result['nom'];
$prenom=$result['prenom'];
$adresse=$result['adresse'];

?>

		  	      <link rel="stylesheet" href="css/style.css">

<h1>Formulaire HTML</h1>

        <form action="<?php echo $route["updateclient"]; ?>"method="post">

		<input type="hidden" id="id_client" name="id_client" value="<?php echo $id_client;?>">

            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="prenom" id="prenom" name="prenom" value="<?php echo $prenom;?>">
            </div>
            <div class="c100">
                <label for="adresse">Adresse: </label>
                <input type="adresse" id="adresse" name="adresse" value="<?php echo $adresse;?>">
            </div>


            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
