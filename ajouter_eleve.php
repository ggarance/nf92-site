<head>
</head>

<body>

<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$jour=$_POST["jour"];
$mois=$_POST["mois"];
$an=$_POST["an"];
echo $prenom."".$nom;
echo"<br>";
echo $jour.".".$mois.".".$an;
echo"<br>";
date_default_timezone_set('Europe/Paris');
$date= date("Y\-m\-d");
echo "<br> la date est:"."'$date'"."<br>";
$fp =fopen('eleve.txt','a+');
fwrite($fp,"\nNouvel élève
$date : inscription
$nom $prenom
$jour.$mois.$an:date de naissance");
fclose($fp);


?>







</body>
