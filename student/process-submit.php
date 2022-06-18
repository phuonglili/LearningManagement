<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'C:/Users/Admin/Documents/GitHub/N9-BTLWeb'; // upload directory
if(!empty($_POST['masv']) || !empty($_POST['mabt']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='$path' />";
$masv = $_POST['masv'];
$mabt = $_POST['mabt'];
//include database configuration file
include_once 'db.php';
//insert form data in the database
$insert = $db->query("INSERT submit (file_sb,id_student,id_hw) VALUES ('".$path."','".$masv."','".$mabt."')");
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
?>