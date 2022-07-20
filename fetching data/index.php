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


//fetching data from database

 $sql = "select * from student"; //ye query apne andr store krrha ha
 $result = mysqli_query($conn, $sql);//to get data from the connection from the query and inserted into a variable
 //fetch assoc query fetch rows from the variable
 //and while loop around to show the whole data

//after that we'll put if statement to check whether the rows are greater than 0 

if(mysqli_num_rows($result)>0){  //mysqli_num_rows this count the number of rows
    while($row = mysqli_fetch_assoc($result)){ 
        echo $row['id'] ." ". $row['name'] . " ". $row['roll'] ." ". $row['adress'] ." ". "<br>";  
    }
} else{
  echo "  no rows found";
}






?>