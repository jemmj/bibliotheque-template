<?php
session_start();
include "../security/secure.php";
include "../includes/database.php";

$id_users=$_GET['id'];


$sql = "select *  FROM users WHERE id_users='$id_users'";
$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

$id_users=$result['id_users'];
$prenom=$result['prenom'];
$email=$result['email'];
$sexe=$result['sexe'];
$age=$result['age'];
$pays=$result['pays'];
$nom =$result['nom'];                                      
$password = $result['password'];
$role = $result['admin'];                  
                    
?>

                  <link rel="stylesheet" href="style.css">

<h1>Formulaire HTML</h1>

        <form action="updateusers.php" method="post">

        <input type="hidden" id="id_users" name="id_users" value="<?php echo $id_users;?>">

            <div class="c100">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $prenom;?>">
            </div>
            
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age" value="<?php echo $age;?>">
            </div>


            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme" <?php if($sexe=="femme")echo "checked";?>>
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme" <?php if($sexe=="homme")echo "checked";?>>
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre" <?php if($sexe=="autre")echo "checked";?>>
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                 <option value="<?php echo $pays?>"><?php echo $pays?></option>

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
            </div>
            <div class="c100" id="submit">
                <label for="mail">Email : </label>
                <input type="email" id="email" name="email" value="<?php echo $email;?>">
            </div>
    <div class="c100" id="submit">
    <label for="password">Password (8 characters minimum):</label>
    <input type="password" id="password" name="password"
           minlength="8" required>
    </div>

            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
