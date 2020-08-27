<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>covid 19 france Infos</title>
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

    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Nunito',sans-serif;
}

.wrapper{
    width: auto;
    position: absolute;
    left: 50%; 
    transform: translateX(-50%);
}
.statistic{
    width: auto;
}

.total_case_box{
    background-color:#00CED1;
  -webkit-box-shadow: 0px 0px 4px 2px #000000; 
   box-shadow: 0px 0px 4px 2px #000000;
   border : 2px groove 	#00CED1;
   border-radius: 10px;
    margin: 10px 15px;
    padding: 15px 0;
    text-align: center;
    text-transform: uppercase;
}
.total_case_box p{
    font-size: 3rem;
}
.Designed_by_box{
    background-color: #800000;
  -webkit-box-shadow: 0px 0px 3px 1px #FF0000; 
box-shadow: 0px 0px 3px 1px #FF0000;
   border-radius:100px;
   color:white;
    margin: 1px 1px;
    padding: 5px 0;
    text-align: center;
    text-transform: uppercase;
}
.Designed_by_box p{
    font-size: 3rem;
}
.wrapper .box_wrapper{
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
}

.box_wrapper .box{
    background-color: #00CED1;
   -webkit-box-shadow: 0px 0px 4px 2px #000000; 
   box-shadow: 0px 0px 4px 2px #000000;
   border : 2px groove 	#00CED1;
  border-radius: 80px;
    margin: 10px 15px;
    width:25%;
    text-align: center;
    padding: 15px 0;
    border-radius: 8px;
    text-transform: uppercase;
}
.box_wrapper .box p{
    font-size: 2.5rem;
}


/*Styiling the table*/
table{-webkit-box-shadow: 0px 0px 10px 2px #000000; 
box-shadow: 0px 0px 10px 2px #000000;
    width: 100%;
    padding: 15px 10px;
    margin: 10px 0;
    text-align: center;
    border-spacing: 0;
}
tr:first-child{
    background-color: #37474f;
    color: #fafafa;
    text-transform: uppercase;
}
th{
    padding: 15px 0;
    border: none;
    border-spacing: 0;
    
}
tr:nth-child(even){
    background-color: #fafafa;
    
    
}
tr:nth-child(odd){
    background-color: #1E8449;
    color: #fafafa;
}
tr td{
    padding: 15px 0;
    
    
}

  </style>
</head>
<body>

    <!-- nav menu -->

<?php

  include("menu.php");

 ?>

 <button onclick = "covid()" id="btn" class="btn btn-danger">Covid-19 Infos</button>

<div class="wrapper">
        <div class="statistic">
          <div class="total_case_box">
                <h2>Total des cas En france</h2>
                <p id="total_cases"></p>
            </div>

   
           <div class="box_wrapper">
                <div class="box">
                    <h2>DÉCÈS TOTAL</h2>
                    <p id="total_death"></p>
                </div>

                <div class="box">
                    <h2>RÉANIMATION TOTALE</h2>
                    <p id="total_recovered"> </p>
                </div>

                <div class="box">
                    <h2>Nouveau cas</h2>
                    <p id="new_case"> </p>
                </div>

                <div class="box">
                    <h2>gueris</h2>
                    <p id="new_death"> </p>
                </div>
           </div> 


<p id="source"></p>
     
<script src="covid.js"></script>
</body>
</html>