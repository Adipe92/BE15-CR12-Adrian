<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM places WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $locationName = $data['locationName'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $price = $data['price'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
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
          <a class="nav-link text-white active" aria-current="page" href="#">Travels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">About us</a>
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
            
            <h4 class="text-center mt-3 mb-3">Welcome to our travel agency Mount Everest!</h4>
            <p class="text-center">Find your way to travel!</p>

            <div class="container">
            <hr class="m-4">
            <div class="row">
                <div class="col-lg-4 text-center">
                <img class="mb-5" src="pictures/<?php echo $picture ?>" alt="pic">
            </div>
            <div class="col-lg-8">
                <h3>Location</h3>
                <p><?php echo $locationName ?></p>
                <br>
                <h4>Price: <?php echo $price ?> euro</h4>
                <br>
                <h4>Description: </h4>
                <p><?php echo $description ?></p>
                <br>
            </div>
            <h4>More about location</h4>
         <div id="map"></div>
        </div>
        </div>
        </div>
        

            <div class="bg-black mt-5">
                <p class="text-center p-5 text-white"><b>Copyright &copy; 2022 -Adrian Pedziwiatr</b></p>
            </div>

<script>

let geocoder;

let markers = [];



    function initMap() {
        geocoder = new google.maps.Geocoder();
        var mlocation = {
        lat: <?php echo $latitude ?>,
        lng: <?php echo $longitude ?>
        };

        map = new google.maps.Map(document.getElementById('map'), {
            center: mlocation,
            zoom: 8
        });

    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    </body>
</html>