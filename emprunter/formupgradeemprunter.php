<?php

/*@session_start();
include "../security/secure.php";*/
include "../includes/database.php";
/*include "../includes/define.php";*/










?>

		  	      <link rel="stylesheet" href="css/style.css">

<h1>Form update Emprunter</h1>

        <form action="<?php echo $route["updateemprunter"]; ?>" method="post">

		<input type="hidden" id="i" name="id_emprunter" value="<?php echo $id_emprunter;?>">
        <input type="hidden" id="id_livre" name="id_livre" value="<?php echo $id_livre;?>">

            <div class="c100">
                <label for="dateemprunt">Date d'emprunt: </label>
                <input type="date" id="dateemprunt" name="dateemprunt" value="<?php echo $dateemprunt;?>">
            </div>
           
           


            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
