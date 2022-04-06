<?php

require_once 'actions/db_connect.php';

$query="SELECT * FROM places";

$result= mysqli_query($connect,$query);

$places=mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($places);

?>