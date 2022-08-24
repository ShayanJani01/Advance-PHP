<?php 

    //setting a cookie
    setcookie("Sale_Item","Denim Jeans");


?>

<?php

    //checking a cookie

    if(!isset($_COOKIE['Sale_Item'])){



        echo "Cookie named Sale_Item is not set";

        
    }else{


      echo  "cookie sale_item is set";
      echo "value is". $_COOKIE['Sale_Item'];

    }




?>