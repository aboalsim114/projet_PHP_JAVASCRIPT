<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=lafumette;charset=utf8', 'root', '');


if(isset($_POST['submit']))
{
    $titre = htmlspecialchars($_POST['titre']);
    $contenu = htmlspecialchars($_POST['contenu']);
    $prix = htmlspecialchars($_POST['prix']);
    $telelphone=htmlspecialchars($_POST['telephone']);
    $adresse=htmlspecialchars($_POST['adresse']);


    if(!empty($_POST['titre']) && (!empty($_POST['contenu'])) && (!empty($_POST['prix'])))


    $req = $bdd->prepare('insert into articles (titre,contenu,prix,telephone,adresse) values (?,?,?,?,?)');
    $req->execute(array($titre,$contenu,$prix,$telelphone,$adresse));
    $ok = "votre annonce a été publier sur notre site";

        header("location:ok.php");

}






?>








<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publier Mon Annonce</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="cigar2.png" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="cigar2.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="10euro icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body  style="background-image: url('https://media.giphy.com/media/TJb0yO9rhndYF3RJKi/giphy.gif');background-size: cover;height: 100vh;padding:0;margin:0;"}>
  <!--le header-->
  <?php
include("menu.php");
  ?>

<h1 style="text-align:center;color:green"></h1>
<div class="form-style-10">
<h1>Publier Votre annonce<span>totalement gratuit</span></h1>
<form name="form" method="post">
    <div class="section"><span>1</span>Titre</div>
    <div class="inner-wrap">
        <label>Titre de l'article<input type="text" name="titre" id="titre" required /></label>
        <small id="titreerr" id="emailHelp" class="form-text text-danger"></small>

    </div>

    <div class="section"><span>2</span>Description</div>
    <div class="inner-wrap">
        <label>Description de l'article<input type="text" name="contenu" id="" required /></label>
        <small  id="drescriptionerr" id="emailHelp" class="form-text text-danger"></small>

    </div>

    <div class="section"><span>3</span>Prix</div>
        <div class="inner-wrap">
        <label>prix <input type="number" name="prix" id="prix" required /></label>
        <small id="prixerr" id="emailHelp" class="form-text text-danger"></small>

    </div>

    <div class="section"><span>4</span>Votre Numero</div>
        <div class="inner-wrap">
        <label>+33 <input type="number" name="telephone" id="telephone" required /></label>
        <small id="numerr" id="emailHelp" class="form-text text-danger"></small>

    </div>

    <div class="section"><span>5</span>Adresse</div>
        <div class="inner-wrap">
        <label>Votre Adresse <input type="text"  name="adresse" id="adresse" required /></label>
        <small id="emailHelp" class="form-text text-danger"></small>

    </div>


    <div class="button-section">
     <input onclick="submitok()" type="submit" name="submit" id="submit" value="Publier Mon Annonce" />
     <span class="privacy-policy">
     </span>
    </div>
</form>
</div>
    



<script src="main.js"></script>
</body>
</html>
