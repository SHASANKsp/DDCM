<?php

$con = mysqli_connect("localhost","root","","DDCM") or die("Failed to connect to MySQL:".mysqli_error());

$name = $_POST['Name'];
$email = $_POST['Email'];
$Comments = $_POST['Comments'];
$filename = $_FILES['Data']['name'];
$tmppath = $_FILES['Data']['tmp_name'];
$targetpath = "F:/Software bioinfo/GIT dir/DDCM/All_data/".$filename; 

$qu = "INSERT INTO `submit-data`
  (`NAME`, `EMAIL`,`COMMENTS`,`FILE`)
  VALUES
  ('$name', '$email','$Comments','$filename');";


if($con->multi_query($qu) == TRUE){
  move_uploaded_file($tmppath,$targetpath);
  echo "Thank you for submiting your data, our database will keep expanding, all because of contributers like you. <br><br><br>";
  echo "We will check all the aspects and will get back to you.<br>";
}else{
  echo "Please try again.<br>";
}


?>
