<html>

<head>
    
    <title>
        THANK YOU - DDCM
    </title>
    <link href="Page design.css" rel="stylesheet">    
</head>

<body class="body">
    <h1 style="background-color: brown;">
    <table style="color: white;">
    <tr>
        <th style="font-size: xx-large; ">DDCM</th>
        <th style="text-align: left;">| Details on<br>| Disease<br>| Causing<br>| Mutations</th>
        <th style="color: brown;">----------</th>
        <th><a  style="color: white;" href="HOME.html"> HOME </a></th>
        <th style="color: brown;">----------</th>
        <th><a  style="color: white;" href="GENETIC_DISEASE.html"> GENETIC DISEASE  </a></th>
        <th style="color: brown;">----------</th>
        <th><a  style="color: white;" href="SUBMIT.html"> SUBMIT </a></th>
        <th style="color: brown;">----------</th>
        <th><a  style="color: white;" href="FEEDBACK.html"> FEEDBACK </a></th>
    </tr>
    </table>
    </h1>

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


  <h1 style="color: brown; background-color: brown;">END</h1>
</body>
</html>