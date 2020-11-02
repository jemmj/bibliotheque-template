<?php

/*@session_start();
include "../security/secure.php";*/
include "../includes/database.php";
/*include "../includes/define.php";*/

$id_emprunter=$_GET['id'];


$sql = "select *  FROM emprunter WHERE id_emprunter='$id_emprunter'";

$sth = $dbco->prepare($sql);

$sth->execute();

 $result = $sth->fetch(PDO::FETCH_ASSOC);

$id_emprunter=$result['id_emprunter'];
$dateemprunt=$result['dateemprunt'];
$id_livre=$result['id_livre'];
$id_client=$result['id_client'];

 








?>

		  	      <link rel="stylesheet" href="css/style.css">

<h1>formulaire pour Emprunter</h1>

        <form action="<?php echo $route["upgradeemprunter"]; ?>" method="post">

		<input type="hidden" id="i" name="id_emprunter" value="<?php echo $id_emprunter;?>">
        <input type="hidden" id="id_livre" name="id_livre" value="<?php echo $id_livre;?>">

            <div class="c100">
                <label for="id_livre"></label>
                <input type="text" id="id_livre" name="id_livre" value="<?php echo $id_livre;?>">
            </div>
            <div class="c100">
                <label for="dateemprunt">Date d'emprunt:</label>
                <input type="date" id="dateemprunt" name="dateemprunt" value="<?php echo $dateemprunt;?>">
            </div>
           
            <div class="c100">
                <label for="id_client">Adresse</label>
                <input type="text" id="id_client" name="id_client" value="<?php echo $id_client;?>">
            </div>
           


            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
