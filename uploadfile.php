<?php
print_r($_POST);
session_start();
if(!isset($_SESSION['myusername'])){
header("location:main_login.php");
}
//print_r($_FILES);
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["File1"]["name"]);
$extension = end($temp);
$size=$_FILES["File1"]["size"] / 1024;
printf (" Size: %d kB<br>",$size);
if($_POST['submitvalue'] === 'size' )exit;
  if ($_FILES["File1"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["File1"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["File1"]["name"] . "<br>";
    echo "Type: " . $_FILES["File1"]["type"] . "<br>";
    //echo "Size: " .  $size .  "kB<br>";
    echo "Temp file: " . $_FILES["File1"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["File1"]["name"]))
      {
      echo $_FILES["File1"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["File1"]["tmp_name"],
      "upload/" . $_FILES["File1"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["File1"]["name"];
      }
    }
 
?>
