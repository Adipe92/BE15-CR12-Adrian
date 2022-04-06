<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Big Web Library |  Add Product</title>
        <link rel="stylesheet" href="style/style.css">
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 90% ;
            }   
            
            th {
                width: 15%;
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
        <fieldset class="container mb-5">
            <legend class='h2 mb-5'>Create New location</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Location</th>
                        <td><input class='form-control' type="text" name="locationName"  placeholder="Location" /></td>
                    </tr> 
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="number" name="price"  placeholder="Price" step="any" /></td>
                    </tr>
                    <tr>
                    <th>Description</th>
                    <td>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Description" rows="3"></textarea>
                    </td>
                  </tr>
                  <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="number" name="longitude"  placeholder="Longitude" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="number" name="latitude"  placeholder="Latitude" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>

                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert location</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <div class="bg-black mt-5">
                <p class="text-center p-5 text-white"><b>Copyright &copy; 2022 -Adrian Pedziwiatr</b></p>
            </div>
    </body>
</html>