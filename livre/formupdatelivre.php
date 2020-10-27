<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";

    if(@$_GET['id']!=""){
$id_livre=$_GET['id'];

$sql = "select *  FROM livre WHERE id_livre='$id_livre'";                                             
$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);


$titre=$result['titre'];
$genre=$result['genre'];
$logo=$result['logo'];
$prix=$result['prix'];
$description=$result['description'];
$page=$result['page'];

         $action=$route["updatelivre"];
                 $titreForm=" MODIFIER LIVRE ";
        }
        else {
            $action= $route["createlivre"];
            $titreForm=" AJOUT DU LIVRE ";
            
        } 




            /*REQUETE LISTE DE TOUTES LES BIBLIOTHEQUES */ 
            /************************************/
            
            $sql = "select id_bibliotheque, nom FROM bilbliotheque";
            $sth = $dbco->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
             foreach ($result as $biblio => $val){
                 @$optionb .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
                 /* equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>" */
             }


            /*REQUETE LISTE DE TOUS LES AUTEURS */ 
            /************************************/
            
            $sql = "select id_auteur, nom as auteur_nom, prenom FROM auteur ";
            $sth = $dbco->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $auteur => $val){
                 @$optiona .="<option value='".$val['id_auteur']."'>".$val['auteur_nom']." ".$val['prenom']."</option>";
                
             }
             
             
             /*REQUETE LISTE DE TOUS LES EDITEURS */ 
             /*************************************/
             
            $sql = "select id_editeur, nom as editeur_nom FROM editeur";
            $sth = $dbco->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $auteur => $val){
                 @$optione .="<option value='".$val['id_editeur']."'>".$val['editeur_nom']."</option>";
                
             }


?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="css/style.css">

<h1>MODIFIER LE LIVRE</h1>
<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
    <div class="row">
		<input type="hidden" id="id_livre" name="id_livre" value="<?php echo $id_livre;?>">

            <div class="col-12">
                <label for="titre">titre : </label>
                <input type="text" id="titre" name="titre" value="<?php echo $titre;?>">
            </div>
            <div class="col-12">
                <label for="genre">genre : </label>
                <input type="genre" id="genre" name="genre" value="<?php echo $genre;?>">
            </div>
            <div class="col-12">
                <label for="logo">logo : </label>
                <input type="file" id="logo" name="logo" value="<?php echo $logo;?>">
            </div>
            <div class="col-12">
                <label for="prix">prix : </label>
                <input type="prix" id="prix" name="prix" value="<?php echo $prix;?>">
            </div>
            <div class="col-12">
                <label for="description"> description: </label>
                <input type="description" id="description" name="description" value="<?php echo $desription;?>">
            </div>
            <div class="col-12">
                <label for="page">page : </label>
                <input type="page" id=^"page" name="page" value="<?php echo $page;?>">
            </div>
     </div>
<div class="c100">
                <label for="id_bibliotheque">Bibliothèque :</label>
                <select id="id_bibliotheque" name="id_bibliotheque">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Sélectionnez la bibliotheque</option>
                       <?php echo $optionb; 
                       /* ==  <option value='id_biblio1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>*/
                        ?>
                </select>
            </div>

            
            <div class="c100">
                <label for="date_publication">Date de publication:</label>
                <input type="date" name="date_publication">  <!-- liste déroulante des bibliothèques disponibles-->
                </input>
            </div>
            
<div class="c100">
                <label for="id_auteur">Auteur :</label>
                <select id="id_auteur" name="id_auteur">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Selectionnez l'auteur</option>
                       <?php echo $optiona; 
                        ?>
                </select>
            </div>
            <div class="c100">
                <label for="id_editeur">Editeur :</label>
                <select id="id_editeur" name="id_editeur">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Selectionnez l'editeur</option>
                       <?php echo $optione; 
                        ?>
                </select>
            </div>
           <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
