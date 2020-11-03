<?php
    //On démarre une nouvelle session
//@session_start();
//include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";

$sql = "select id_users, nom FROM users";


?>
  
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384- Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

  <link rel="stylesheet" href="../css/formulaire.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





<h1>creation utilisateurs</h1>
       <div class="container">
<div class="row">
    <div class="col-4"></div>
    <div class="col-4"> 
        <form action="<?php echo $route["createusers"];?>" method="post">
            <div class="c100">
                <label for="nom">nom </label>
                <input class="form-control" type="text" placeholder="Enter your Name"type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="prenom">Prénom </label>
                <input class="form-control" type="text" placeholder="Enter your Surnamame" name="surname"  type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="email">Email</label>
                <input class="form-control" type="text" placeholder="Enter your Email adress" name="nom" type="email" id="email" name="email">
            </div>
            <div class="c100">
                <label for="age">Age</label>
                <input class="form-control" type="text" placeholder="Enter your Age" name="nom" type="number" id="age" name="age">
            </div><br>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div><br>
            <div class="c100">
                <label for="pays">Pays de résidence</label><br>
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
            </div>
<div>
    <label for="exampleInputPassword">Password</label>
<input class="form-control" type="text" placeholder="Password"  name="password" id="password" /><span id='error_password' style="color:red"> </span>
<label for="exampleInputRetypepassword">Retypepassword</label>
<input class="form-control" type="text" placeholder="retypepassword" name="retypepassword" id="retypepassword" /><span id='error_retypepassword' style="color:red"> </span>
</div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
        </div>
</div>
</div>
</div>

<script>

function validateEmail($email) {
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
return emailReg.test( $email );
}

$(document).ready(function(){

$("#email").on("blur",function(){

var $email= $("#email").val();

if(validateEmail($email)){

$.ajax({

url : '../api/checkemail.php',
type : 'GET',
data:'email='+$("#email").val(),

dataType : 'text',
success : function(resultat, statut){
//alert(resultat);
if(resultat=="OK"){
//Mettre la bordure en vert
$("#email").css('color','green');
$('#error_email').html("");
}
else if(resultat=="KO"){
//Mettre la bordure en rouge
$("#email").css('color','red');
$('#error_email').html("Email already exist");
}
},

error : function(resultat, statut, erreur){
alert(resultat);
},

complete : function(resultat, statut){

}


});
}
else {
$('#email').focus();
$('#error_email').html("Email non Valide");
}

});
$("#password").on("input",function(){

var $password= $("#password").val();



$.ajax({

url : '../api/validatepassword.php',
type : 'GET',
data:'password='+$("#password").val(),

dataType : 'text',
success : function(resultat, statut){
//alert(resultat);
if(resultat=="valid"){
//Mettre la bordure en vert
$("#password").css('color','green');
$('#error_password').html("");
}
else if(resultat!="valid"){
//Mettre la bordure en rouge
$("#password").css('color','red');
$('#error_password').html("Password not valid");
}
},

error : function(resultat, statut, erreur){
alert(resultat);
},

complete : function(resultat, statut){

}

});

});


$("#retypepassword").on("input",function(){
var $password= $("#password").val();
var $retypepassword= $("#retypepassword").val();


if($password==$retypepassword)
{
$("#retypepassword").css({color :'green', borderColor :'green'});
$('#error_retypepassword').html("");
}

else
{
$("#retypepassword").css({color :'red', borderColor :'red'});
$('#error_retypepassword').html("password non indentiques");
}


});



});

</script>


<?
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
