<?php

$con = mysqli_connect("localhost","root","","DDCM") or die("Failed to connect to MySQL:".mysqli_error());

$name = $_POST['Name'];
$email = $_POST['Email'];
$Comments = $_POST['Comments'];



$qu = "INSERT INTO `km-data`
  (`NAME`, `EMAIL`,`COMMENTS`)
  VALUES
  ('$name', '$email','$Comments');";


if($con->multi_query($qu) == TRUE){
  echo "Thank you for submiting your data, our database will keep expanding, all because of contributers like you. <br><br><br>";
  echo "We will check all the aspects and will get back to you.<br>";
}else{
  echo "Please try again.<br>";
}


?>
