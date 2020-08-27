<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La méteo aujourdhui</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="meteo.css">

</head>
<body>

    <!-- nav menu -->

    <?php

  include("menu.php");

  ?>
      <!-- nav fini -->


      <!-- meteo script -->


     <button id="btn" type="button" onclick="meteo()" class="btn btn-primary">Affichier la Meteo</button>     <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-sm-12 col-xs-12">
                <div class="card text-white">
                    <div class="div1 p-4 p-md-5 ">
                        
                        <h5 id="ville"></h5>
                        <h1 id="temperature"><sup></sup> </h1>
                        <p id="contenu" class="my-0"></p>
                        <h4 id="date" class="my-0"></h4>
                    </div>
                    <div class="div2"> </div>
                </div>
            </div>
        </div>
    </div>

    <!-- fin script -->



<script>


async function meteo()
{
        const url  = "http://api.openweathermap.org/data/2.5/weather?q=Paris&units=metric&lang=fr&appid=cd2d2cac0ee6d14bf856cd3b919659d9";

        await fetch(url)
        .then(res=>res.json())
        .then(res=>{

        const data = res;

        console.log(data);


        const ville  = document.getElementById("ville");

        ville.innerHTML = "ville : "+ data.name;

        

        const temp = document.getElementById("temperature");

        temp.innerHTML  = Math.ceil(data.main.temp) +"<span>&#176;</span>";


        const contenu = document.getElementById("contenu");

        contenu.innerHTML = data.weather[0].description;
          
              
        const ok = document.createElement("ok");

        ok.innerHTML = "<h3>On a recuperer les informations avec succes !!!</h3>";
        ok.style.color = "green";

        document.body.append(ok);
              



        const imgsucces = document.createElement("img");

        imgsucces.src = "https://img.icons8.com/fluent/96/000000/ok.png";

        document.body.append(imgsucces);


        })
        .catch(err=>{
            const errapi = document.createElement("h2");

                errapi.style.color = "red";

                errapi.innerHTML  = "On a pas reussi a recuperer les données cette fois Merci de ressayer plus tard";

                document.body.append(errapi);

        })
};


</script>







    <script src="main.js"></script>
</body>
</html>