<?php

$con = mysqli_connect("localhost","root","","DDCM") or die("Failed to connect to MySQL:".mysqli_error());

$name = $_POST['Name'];
$email = $_POST['Email'];
$Comments = $_POST['Comments'];

$qu = "INSERT INTO `feedback-data`
  (`NAME`, `EMAIL`,`COMMENTS`)
  VALUES
  ('$name', '$email','$Comments');";


if($con->multi_query($qu) == TRUE){
  echo "Thank you for giving your valuable time for the feedback.<br>";
}else{
  echo "Please try again.<br>";
}


?>
