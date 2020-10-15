<?php 
@session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";


$sql = "select id_editeur, nom FROM editeur";


?>






<h1>Formulaire HTML</h1>
        
        <form action="<?php echo $route["createediteur"];?>" method="post">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="adresse">Adresse: </label>
                <input type="adresse" id="adresse" name="adresse">
            </div>
            

 


                <input type="submit" value="Envoyer">
  
    

            </div>
        </form>