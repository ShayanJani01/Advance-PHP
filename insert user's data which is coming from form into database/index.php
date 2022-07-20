<!-- INSERT INTO `student` (`id`, `name`, `roll`, `adress`) VALUES (NULL, 'shayan', '101', 'karachi'), (NULL, 'shoaib', '102', 'lahore'); -->

<!-- database name = connection || table name = student || coloums = id , name , roll , adress || -->
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

/* $sql = "INSERT INTO student (name, roll, adress) values('afnan','104','Dha')";

if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully";
}else{
    echo "data insertion failed";
}
*/

//vALIDATIONS

if(isset($_REQUEST['submit'])){

    if(($_REQUEST['name']== "") || ($_REQUEST['roll']== "") || ($_REQUEST['adress']== "")  ){
        echo "<small>Please fill all the fields</small>.<hr>";
    }
    else{
      $name =  $_REQUEST['name'];
      $roll =  $_REQUEST['roll'];
      $adress =  $_REQUEST['adress'];
      $sql = "INSERT INTO student (name, roll, adress) values('$name','$roll','$adress')";
      if(mysqli_query($conn , $sql)){
        echo"data inserted successfully";
    }else{
        echo"data insertion failed";
    
    }
    }


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

    <title>Form</title>
  </head>
  <body>
    
    <div class="container">

    <!-- form -->
    <form action="" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Student Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="mb-3">
     <label for="roll" class="form-label">Roll No.</label>
        <input type="text" class="form-control" id="roll" name="roll">
    </div>
    <div class="mb-3">
     <label for="adress" class="form-label">Address</label>
        <input type="text" class="form-control" id="adress" name="adress">
    </div>
   
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>



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
