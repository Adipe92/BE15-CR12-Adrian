<?php 

require_once 'actions/db_connect.php';

$query = "SELECT * FROM places";
$result = mysqli_query($connect, $query);
if (mysqli_query($connect, $query)){
    echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
}else{
    echo mysqli_error($conn);
}

?>
