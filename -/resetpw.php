<?php 

include('./connection.php');

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-Reset-password</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
           
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f0f2f5;
    color: #1c1e21;
}

main {
    height: 90vh;
    width: 100vw;
    position: relative;
    margin: 0 auto;
}

footer {
    height: 10vh;
    background-color: #ffffff;
}

.row {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    max-width: 1000px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.colm-logo {
    flex: 0 0 50%;
    text-align: left;
}

.colm-form {
    flex: 0 0 40%;
    text-align: center;
}

.colm-logo img {
    max-width: 400px;
}

.colm-logo h2 {
    font: 26px;
    font-weight: 400;
    padding: 0 30px;
    line-height: 32px;
}

.colm-form .form-container {
    background-color: #ffffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    padding: 20px;
    max-width: 400px;
}

.colm-form .form-container input, .colm-form .form-container .btn-login {
    width: 100%;
    margin: 5px 0;
    height: 45px;
    vertical-align: middle;
    font-size: 16px;
}

.colm-form .form-container input {
    border: 1px solid #dddfe2;
    color: #1d2129;
    padding: 0 8px;
    outline: none;
}

.colm-form .form-container input:focus {
    border-color: #1877f2;
    box-shadow: 0 0 0 2px #e7f3ff;
}

.colm-form .form-container .btn-login {
    background-color: #1877f2;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    padding: 0 16px;
    color: #ffffff;
    font-weight: 700;
}

.colm-form .form-container a {
    display: block;
    color: #1877f2;
    font-size: 14px;
    text-decoration: none;
    padding: 10px 0 20px;
    border-bottom: 1px solid #dadde1;
}

.colm-form .form-container a:hover {
    text-decoration: underline;
}

.colm-form .form-container .btn-new {
    background-color: #42b72a;
    border: none;
    border-radius: 6px;
    font-size: 17px;
    line-height: 48px;
    padding: 0 16px;
    color: #ffffff;
    font-weight: 700;
    margin-top: 20px; 
}

.colm-form p {
    font-size: 14px;
}

.colm-form p a {
    text-decoration: none;
    color: #1c1e21;
    font-weight: 600;
}

.colm-form p a:hover {
    text-decoration: underline;
}

.footer-contents {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
}

footer ol {
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
    padding: 10px 0;
}

footer ol:first-child {
    border-bottom: 1px solid #dddfe2;
}
           
footer ol:first-child li:last-child button {
    background-color: #f5f6f7;
    border: 1px solid #ccd0d5;
    outline: none;
    color: #4b4f56;
    padding: 0 8px;
    font-weight: 700;
    font-size: 16px;
}

footer ol li {
    padding-right: 15px;
    font-size: 12px;
    color: #385898;
}

footer ol li a {
    text-decoration: none;
    color: #385898;
}

footer ol li a:hover {
    text-decoration: underline;
}

footer small {
    font-size: 11px;
}
    </style>
</head>
<body>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <main>
        <div class="row">
            <div class="colm-logo">
                <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Logo">
                <h2>Resetting your password? No worries, We got your back.</h2>
            </div>
            <div class="colm-form">
                <div class="form-container">
                    <form method="POST">
                    <input name="email" type="text" placeholder="Enter the email address">
                    <input name="password" type="password" placeholder="Enter new password">
                    <button name="reset" value="reset" class="btn-login">Reset-Password</button>
                    </form>
                    <a href="main.php">Want to Login?</a>
                    <a href="main.php"><button style="cursor: pointer;" class="btn-new">Create new Account</button></a>
                </div>
                <p><a href="#"><b>Create a Page</b></a> for a celebrity, brand or business.</p>
            </div>
        </div>
    </main> 
    <footer>
        <div class="footer-contents" style="display:flex; justify-content:center;">
            <ol>
            <div id="google_translate_element"></div>

            </ol>
        </div>
        <center><small>Facebook © 2022</small>  </center>
    </footer>
</body>
</html>


<?php 

if (isset($_REQUEST['reset'])){
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    
  
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
  
    if ($row = mysqli_fetch_assoc($result)) {


        $update = "UPDATE `register` SET `password`='$password' WHERE email = '$email'";    
            

        if(mysqli_query($conn , $update)){

echo "your password is reseted";

        }



    } else {
      echo "you don't exist in database";
    }





// $update = "UPDATE `register` SET `password`='$password' WHERE email = '$email'";
// //   $sql = "SELECT email,password FROM register";  //ye query apne andr store krrha ha
// $result = mysqli_query($conn,$update);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


// $count = mysqli_num_rows($result);

// if(!$count == $email) {
    
    
// echo "<script> alert ('you don't exist in our database');</script>";
// function location($where){
// 	echo '<script>window.location.href="'.$where.'"</script>';
// }


// location("http://localhost/facebook/main.php");
// }

// else {
//     echo "<script> alert ('resetted');</script>";
//     function location($where){
//         echo '<script>window.location.href="'.$where.'"</script>';
//     }
    
    
//     location("http://localhost/facebook/pager.php");
//     }
    
}   





?>