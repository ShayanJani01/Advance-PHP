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









?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Shayan-Jani</title>
  </head>
  <body>
    
  <div class="container">
    <?php 
    $sql = "select * from student";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){

        echo '<table class="table">';
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Roll No</th>";
        echo "<th>Address</th>";
        
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_assoc ($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['roll'] . "</td>";
            echo "<td>" . $row['adress'] . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }


        echo '</table>';

    }else {
        echo "0 results";
    }
    
    
    ?>
  </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
