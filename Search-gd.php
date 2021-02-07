<?php

$con = mysqli_connect("localhost","root","","DDCM") or die("Failed to connect to MySQL:".mysqli_error());

$name = $_POST['Name'];
#$up_name = strtoupper($name);
#echo ($up_name);

$q1 = "SELECT * FROM `gd-data` WHERE `NAME` LIKE '$name'";

$results = $con->query($q1);

while($row = $results->fetch_array()){
    echo "Name of the disease:".$row['NAME']."<------>"."Database ID: ".$row['ID']."<br>"."Description:"."<br>".$row['DESCRIPTION'];
    
} 

?>


<?php

$con = mysqli_connect("localhost","root","","DDCM") or die("Failed to connect to MySQL:".mysqli_error());

$name = $_POST['Name'];
#$up_name = strtoupper($name);
#echo ($up_name);

$q1 = "SELECT * FROM `gd-data` WHERE `NAME` LIKE '$name'";
$results = $con->query($q1);

if ($results == TRUE){
    echo "if loop";
    while($row = $results->fetch_array()){
        echo "Name of the disease:".$row['NAME']."<------>"."Database ID: ".$row['ID']."<br>"."Description:"."<br>".$row['DESCRIPTION'];
    } 
}else{
    echo "Data not available.<br>";
    echo "If you have some related data kindly do submit to the database.<br>";
    echo "Do leave a feedback otherwise.<br>";
}

?>