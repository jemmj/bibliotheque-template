<?php
    //On démarre une nouvelle session
@session_start();
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
     *de caractères vide*/
$sql = "select id_users, nom FROM users";


    ?>





<h1>creation utilisateurs</h1>
        
        <form action="<?php echo $route["createusers"];?>" method="post">
            <div class="c100">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="email">Email : </label>
                <input type="email" id="email" name="email">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="benin">Bénin</option>
                        <option value="togo">Togo</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                    </optgroup>
                </select>
            </div>        <div class="c100" id="submit">              <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
</div>

<div>
    <label for="pass">Password (8 characters minimum):</label>
    <input type="password" id="pass" name="password"
           minlength="8" required>
</div>
                <input type="submit" value="Envoyer">
  
    

            </div>
        </form>


<?php
   // Vérifier si le formulaire est soumis 
   //if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
    // $prenom = $_POST['prenom']; 
    // $age = $_POST['age']; 
    // $email = $_POST['email'];
    // $sexe = $_POST['Sexe'];
    // $pays = $_POST['pays'];
     // afficher le résultat
    // echo '<h3>Informations récupérées en utilisant POST</h3>'; 
    // echo 'prenom : ' . $prenom . ' Age : ' . $age . ' email  : ' . $email . ' Sexe : ' .$sexe . ' pays : ' . $pays; 
    // exit;
 // }
