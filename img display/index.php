<?php
    session_start();
    $session_id = $_SESSION['user_id'];
    if($session_id == null){
       header("location:Student_Edit.php");
       die();
    }
    include 'Connect.php';
    $flag = "";
    $result = mysql_query("SELECT * FROM student_information where student_id='{$_SESSION['user_id']}'",$link_id);;
    $data = mysql_fetch_array($result);
?>   

---some html, javascript and style codes here

<?php
$path = "uploads/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['photoimg']['name'];
$size = $_FILES['photoimg']['size'];
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if($size<(1024*1024)) // Image size max 1 MB
{
$session_id = $student_id.".".$ext;
$tmp = $_FILES['photoimg']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
mysql_query("UPDATE student_information SET profile_image='$actual_image_name' WHERE student_id='{$_SESSION['user_id']}'",$link_id);
echo "<img src='uploads/".$session_id."' class='preview'>";
}
else
echo "failed";
}
else
echo "Image file size max 1 MB"; 
}
else
echo "Invalid file format.."; 
}
else
echo "Please select image..!";
exit;
}
?>
<div style="width:600px">
<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
Change your profile pic <input type="file" name="photoimg" id="photoimg" />
</form>
<div id='preview'>
</div>  

</body>
</html>
