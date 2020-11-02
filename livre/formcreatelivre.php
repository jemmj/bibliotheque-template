<?php
include "../security/secure.php";
include "../includes/database.php";

include "../includes/define.php";


            

 $sql = "select id_bibliotheque, nom FROM bilbliotheque";
            $sth = $dbco->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);




             foreach ($result as $bi => $val){

                 @$option .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";

             }
            $sql = "select id_auteur, nom FROM auteur";
            $sth = $dbco->prepare($sql); 

            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    



            foreach ($result as $bi => $val){
                @$optionauteur .="<option value='".$val['id_auteur']."'>".$val['nom']."</option>";
            }
              $sql = "select id_editeur, nom FROM editeur";
            $sth = $dbco->prepare($sql);   
                     $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    


            foreach ($result as $bi => $val){
                @$optionediteur .="<option value='".$val['id_editeur']."'>".$val['nom']."</option>";
            }
?>
<h1>Formulaire HTML</h1>
        
        <form action="<?php echo $route['createlivre'];?>" method="post" enctype="multipart/form-data">
            <div class="c100">
                <label for="titre">titre : </label>
                <input type="text" id="titre" name="titre">
            </div>
            <div class="c100">
                <label for="genre">genre : </label>
                <input type="genre" id="genre" name="genre">
            </div>
            
 <div class="c100">
                <label for="logo">logo : </label>
                <input type="file" id="logo" name="logo">
            </div>

            <div class="c100">
                <label for="prix">prix : </label>
                <input type="prix" id="prix" name="prix">
            </div>
             <div class="c100">
                <label for="description">description : </label>
                <input type="description" id="description" name="description">
            </div>
             <div class="c100">
                <label for="page">page: </label>
                <input type="page" id="page" name="page">
            </div>
            

            <div class="c100">

                <label for="id_bibliotheque">Bibliothèque :</label>

                <select id="id_bibliotheque" name="id_bibliotheque" >  <!-- liste déroulante des bibliothèques disponibles-->

                    <option value="">--Selectionnez la bibliotheque</option>

                       <?php echo $option; 

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
                       <?php echo $optionauteur; 
                        ?>
                </select>
            </div>
            <div class="c100">
                <label for="id_editeur">Editeur :</label>
                <select id="id_editeur" name="id_editeur">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Selectionnez l'editeur</option>
                       <?php echo $optionediteur; 
                        ?>
                </select>
            </div>






                <input type="submit" value="Envoyer">
  
    

            </div>
        </form>