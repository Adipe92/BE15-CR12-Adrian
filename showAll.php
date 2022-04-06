<?php 
require_once 'actions/db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Big Web Library</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style/style.css">
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 100px !important;
                height: 120px !important;
                margin-top: 50px;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-black">
  <div class="container-fluid">
      <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="displayAll.php">Display All</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="showAll.php">Show All</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">Contact</a>
        </li>

    </div>
      </div>
    
  </div>
</nav>
    <div class="text-center">
        <img src="pictures/logo.png" alt="logo">
    </div>
    <div class="container">
        <h4>To see all info click the button!</h4>
        <button class="btn btn-success mt-3 mb-3" id="button">Display All</button>
        <div id="places"></div>
    </div>
    </div>    
    
    <script>
       document.getElementById("button").addEventListener("click", getplaces, false); 

       function getplaces() {
           const request = new XMLHttpRequest(); 
           request.open("GET", "places.php", true); 
           request.onload = function () {
               if (this.status == 200) {
                   let showPlaces = JSON.parse(this.responseText); 
                   console.log(showPlaces) 
                   let output = '';
                   for (let i in showPlaces) {
                       output += `
                       <ul>
                       <li>Location: ${showPlaces[i].locationName} </li>
                       <li>Picture Id: ${showPlaces[i].picture} </li>
                       <li>Price: ${showPlaces[i].price} </li>
                       <li>Description: ${showPlaces[i].description} </li>
                       <li>Longitude: ${showPlaces[i].longitude} </li>
                       <li>Latitude: ${showPlaces[i].latitude} </li>
                       </ul>
                       `; 
                   }
                   document.getElementById('places').innerHTML = output; //
               }
           }
           request.send(); 
       }
   </script>
</body>
</html>

            <div class="bg-black mt-5">
                <p class="text-center p-5 text-white"><b>Copyright &copy; 2022 -Adrian Pedziwiatr</b></p>
            </div>
        
    </body>
</html>