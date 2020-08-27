<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La __ Fumette</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="cigar2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body onload="load()">

  <?php

include("menu.php");
  ?>

  <h1 id="bienvenue" style="text-align: center;color: green;"></h1>
  <h1 id="bienvenue2" style="text-align: center;color: green;"></h1>


<br>
<br><br><br><br>

<!-- Debut de la presentation -->

<section data-aos="flip-left"  data-aos-duration="2000">
        <div class="row">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Qualité</div>
                <div class="card-body">
                  <h5 class="card-title">Des milliers de personnes pour tous vos besoins</h5>
                </div>  
                <hr>
                            
</div>
<hr>
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Sécurité</div>
    <div class="card-body">
      <h5 class="card-title">Le vendeur n’est payé que En CASH</h5>
    </div>
</section>

<section data-aos="zoom-in"  data-aos-duration="2000">
    <div class="row">

        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Facilité</div>
            <div class="card-body">
              <h5 class="card-title">Vous pouvez consultez les offres des vendeurs ou ajouter vos offres sur le site</h5>
            </div>
           

    </div>
    <hr>

    <div data-aos="zoom-in-left"  data-aos-duration="2000" class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">la location</div>
        <div class="card-body">
          <h5 class="card-title">Vous pouvez louer des chicha ou loer votre chicha avec nous </h5>
        </div>
      </div>

     




</section>
<!-- fin de la presentation -->




<script src="main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>