<?php
 @session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";


$id_editeur=$_GET['id'];


$sql = "select *  FROM emprunter WHERE id_emprunter='$id_emprunter'";

$sth=$dbco->prepare($sql);
$sth->execute();

$id_editeur=$result['id_editeur'];
$dateemprunt=$result['dateemprunt'];


?>

		  	      <link rel="stylesheet" href="css/style.css">

<h1>Form update Emprunter</h1>

        <form action="<?php echo $route["updateemprunter"]; ?>" method="post">

		<input type="hidden" id="id_emprunter" name="id_emprunter" value="<?php echo $id_emprunter;?>">

            <div class="c100">
                <label for="dateemprunt">Date d'emprunt: </label>
                <input type="date" id="dateemprunt" name="dateemprunt" value="<?php echo $dateemprunt;?>">
            </div>
           
           


            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
