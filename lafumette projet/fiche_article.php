<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=lafumette;charset=utf8', 'root', '');

 if(isset($_GET['id']) AND !empty($_GET['id']))
 {
 	$id_get=htmlspecialchars($_GET['id']);
 	$articles=$bdd->prepare("SELECT * FROM articles WHERE id =?");
 	$articles->execute(array($id_get));

 	if($articles->rowCount()==1)
 	{
 		$article=$articles->fetch();
 		$titre=$article['titre'];
 		$conten=$article['contenu'];
 		$adresse=$article['adresse'];
 		$prix=$article['prix'];
 		$telephone=$article['telephone'];
 		$id=$article['id'];


 	}

 }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Annonce</title>
	 <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style="background-image: url('https://media.giphy.com/media/l3q2Emu1EDAcmIYRW/giphy.gif');background-repeat: no-repeat;
background-position: center;
background-size: cover;
width: 100%;
height: 100%;">

  <!--le header-->

  <?php

include("menu.php");
  ?>
<br><br><br>
<div align="center">
<h2>Titre</h2>
<p style="font-size: xx-large;"><?=$titre?></p>
<h2> Description</h2>
<p style="font-size: xx-large;" ><?=$conten?></p>
<h2>Prix:</h2>
<p style="font-size: xx-large;color:red"><?=$prix?>€</p>
<h2>telephone</h2>
<p style="font-size: xx-large;"><?=$telephone?></p>
<h2>adresse</h2>
<p style="font-size: xx-large;"><?=$adresse?></p>
<br><br>
</div>



<br><br><br>

</body>
</html>