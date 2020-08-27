<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=lafumette;charset=utf8', 'root', '');


$offre = $bdd->query("SELECT * FROM articles ORDER BY id DESC");



?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les offres</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="cigar2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="10euro icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body style="background-image: url('https://media.giphy.com/media/TJb0yO9rhndYF3RJKi/giphy.gif');background-size: cover;height: 100vh;padding:0;margin:0;"}>
  <!--le header-->

  <?php

include("menu.php");
  ?>


      
      <?php while($a=$offre->fetch()) { ?>

      <div class="row">             

    <div class="d-flex flex-row bd-highlight mb-3">


<div class="card border-success mb-3" style="max-width: 18rem;">

<div class="card-header bg-transparent border-success">annonce</div>
<div class="card-body text-success">

<h5 class="card-title"><?=$a['titre'];?></h5>
<p class="card-text"><?=$a['contenu'];?></p>


</div>

<div class="card-footer bg-transparent border-success"
><a class ="btn btn-danger" href="fiche_article.php?id=<?=$a['id']?>">voir l'anoonce</a>

</div>

</div>

  </div>


  <?php } ?>



</body>
</html>
