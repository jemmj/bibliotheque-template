  
<link rel="stylesheet"     href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384- Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

  <link rel="stylesheet" href="formulaire.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Formulaire HTML super simple à sérialiser -->

<div class="container">
<div class="row">
	<div class="col-4"></div>
	<div class="col-4">
		
<form class="form-group"id="formulaire" method="POST" action="traitement.php">
<label for="exampleInputNom">Name</label>
<input class="form-control" type="text" placeholder="Enter your Name" name="nom" /><br/>
<label for="exampleInputPrenom">Surname</label>
<input class="form-control"  type="text" placeholder="Enter your Surname" name="prenom" /> <br/>
 <label for="exampleInputEmail1">Email address</label>
<input class="form-control" type="text" placeholder="Enter your Email adress" name="email" id="email" /> <span id='error_email' style="color:red"> </span><br/>
<label for="exampleInputPassword">Password</label>
<input class="form-control" type="text" placeholder="Password"  name="password" id="password" /><span id='error_password' style="color:red"> </span><br/>
<label for="exampleInputRetypepassword">Retypepassword</label>
<input class="form-control" type="text" placeholder="RetypePassword" name="repassword" id="repassword" /><span id='error_retypepassword' style="color:red"> </span><br/>

<input type="submit"class="btn btn-primary btn-block btn-sm" name="submit" />
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

url : 'traitement.php',
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

url : 'validateajax.php',
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






});




</script>




