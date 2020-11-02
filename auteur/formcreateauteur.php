<?php 

@session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";


 $sql = "select id_auteur, nom FROM auteur";


?>
<h1>formulaire création auteur</h1>
        
        <form action="<?php echo $route["createauteur"];?>" method="post">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="prenom">Prenom: </label>
                <input type="prenom" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="nationalite">Nationalite: </label>
                <input type="text" id="nationalite" name="nationalite">
            </div>

 


                <input type="submit" value="Envoyer">
  
    

            </div>
        </form>

        ?>