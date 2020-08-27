<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Derniers Informations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    #btn {
      display: block;
      margin : auto;
      margin-right : auto;
      margin-left : auto;
     padding  : 10px;
     background-color  : green;
     color : #fff;
    }

    #btn:hover{
      background-color : #530861;

    

    }

    .img{
      
      display: block;
      margin : auto;
      margin-right : auto;
      margin-left : auto;
    }
    hr{
      background-color : red;
    }

    li {
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: 2px 4px 25px rgba(0, 0, 0, .1);
}

  </style>
</head>
<body onload="infos()">

    <!-- nav menu -->

    <?php

  include("menu.php");

  ?>



  <button onclick = "infos()" id="btn" class="btn btn-primary">Les Derniers Informations</button>
<div class="container">
<div class="row">
<div class="card" style="width: 18rem;">
  <img id="img" class="card-img-top" src="..." alt="image">
     <div class="card-body">
       <h5 class="text text-primary" id="titre" class="card-title"></h5>
       <p id="desc" class="card-text"></p>

     </div>
     <ul class="list-group list-group-flush">
       <li id="date"  class="list-group-item"></li>
       <li style="color: hsl(30, 100%, 50%);" id="source"  class="list-group-item"></li>
     </ul>
     <div class="card-body">

     </div>
   </div> 
   </div>
</div>
<br><br><hr> 





<ul id="test"></ul>

   <div id="articles1"></div>
     
<script src="info.js"></script>
</body>
</html>