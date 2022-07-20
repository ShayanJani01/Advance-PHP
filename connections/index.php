<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "connection";

//create a connection

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

//checking the connection

if($conn){
    echo "connection successfull";
}
else{
    die("connection failed");
}


?>
