


<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
           function bonjour(){
                echo 'Bonjour à tous <br>';
            }
            bonjour();
            bonjour();
            bonjour();
            function add2 ($a){
             return $a+2;
        }
        $b=add2(3);
        echo $b;

        function addition($x,$y){

        return $x+$y;
        $y=addition(3,6);
        echo "<hr/>".$y;
    }

            $x = 10;
            
            function portee1(){
                global $x;
                echo  $x. '<br>';
                
            }
            
           function portee2(){
           $x = 5;
            echo" <hr/>".$x;
        }
        portee1();
        portee2();
       echo" <hr/>".$x;
        
        $prenoms = array('Mathilde', 'Pierre', 'Amandine', 'Florian');
        $noms = ["koueya","samy","baby","magali"];
        $ages = [27, 29, 21, 29];
        $taille = count($prenoms);
        echo "<br/>";
        echo $prenoms[2];

        for($i=0;$i< $taille; $i++){
                @$p .= $prenoms[$i]. ', ';
         }
            echo $p. '<br><br>';
            
         foreach ($prenoms as $valeurs){
                @$resultat .= $valeurs. ', ';
            }
            echo $resultat;






$i = 5;
while ($i < 9) {
    echo $i;
    $i++;
          
         }
         
  

        ?>
        <p>Un paragraphe</p>
    </body>
</html>




<!---
<html>
<head> <title>Ma première page Php</title>
</head>
<body>
<h1>Bonjour</h1>
<?php
/*
  $a=13;
  $b=4;
  $c=10;
   echo "<h1>$a x \"$b\" = ".$a*$b." </h1>";
   
   $nom="Bienvenue Nestor<br/>";
   
   echo $nom;
   
   for($i=0;$i<3;$i++){
	   
	   echo $i."<br/>";
   }
   
   $i=0;
   while($i<3){
	    echo $i."<br/>";
		$i++;
   }
   
   if(($a<$b) && ($a<$c))
   {
	
		echo " A est le plus petit sa valeur est  $a";
		if($b>$c){
		    
			echo " l'ordre est A < C < B ($a<$c<$b)";
	   }
	   else {
		   
			echo " l'ordre est A < B < C ($a<$b<$c)";
	   } 
   }
   else if($a<$b && $a>$c)
   {
	   echo " C est le plus petit sa valeur est $C ";
	   echo " l'ordre est C < A < B ($c<$a<$b)";
   }
   else if($a>$b && $a<$c)
   {
	   echo " b est le plus petit sa valeur est $b ";
	   echo " l'ordre est b < a < c ($b<$a<$c)";
	   
   }
   else if($a>$b && $a>$c)
   {
	   if($b>$c){
		    echo " C est le plus petit sa valeur est $c ";
			echo " l'ordre est C < B < A ($c<$b<$a)";
	   }
	   else {
		    echo " B est le plus petit sa valeur est $b ";
			echo " l'ordre est B < C < A ($b<$c<$a)";
	   }
   }
   
  
 */
 ?>  

</body>
​
</html>
-->