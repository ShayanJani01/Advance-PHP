<!-- INSERT INTO `student` (`id`, `name`, `roll`, `adress`) VALUES (NULL, 'shayan', '101', 'karachi'), (NULL, 'shoaib', '102', 'lahore'); -->


<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "connection";

//created a connection

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

//checking the connection

if($conn){
    echo "connection successfull <hr>";
}
else{
    die("connection failed");
}

$sql = "INSERT INTO student (name, roll, adress) values('afnan','104','Dha')";

if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully";
}else{
    echo "data insertion failed";
}


?>
