<?php 
require_once 'actions/db_connect.php';


$sql = "SELECT * FROM places";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= " 
        <div class='col-lg-4 col-md-6 col-sm-12'>
        <div class='card mt-3' style='width: 18rem;'>
  <img src='pictures/" .$row['picture']. "' class='card-img-top' alt='pic'>
  <div class='card-body'>
    <h5 class='card-title'>" .$row['locationName']. "</h5>
    <p class='card-text'>" .$row['description']. "</p>
  </div>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'>Price: " .$row['price']. "€</li>
  </ul>
  <div class='card-body'>
  <a href='details.php?id=" .$row['id']."'><button class='btn btn-secondary btn-sm ms-4 mt-4 mb-4'type='button'>Details</button></a>
  </div>
</div></div>";
    };
} else {
    $tbody =  "<tr><td colspan='10'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
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
        
            <main>
            <div class="manageProduct w-75 mt-3"> 
            
            <h4 class="text-center mt-3 mb-3">Welcome to our travel agency Mount Everest!</h4>
            <p class="text-center">Find your way to travel!</p>

            <div class="row mt-5">
                <?= $tbody;?>
            </div>
                    
                
        </div>
            </main>

            <div class="bg-black mt-5">
                <p class="text-center p-5 text-white"><b>Copyright &copy; 2022 -Adrian Pedziwiatr</b></p>
            </div>
        
    </body>
</html>