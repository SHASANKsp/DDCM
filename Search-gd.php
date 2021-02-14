<html>

<head>
    
    <title>
        SEARCH RESULT - DDCM
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

$id = $_POST['database'];

if($id == "gd"){
    $Name = $_POST['Name_D'];
    $q1 = "SELECT * FROM `disease` WHERE `Name` LIKE '$Name'";
    $results_gd = $con->query($q1);
    $row_gd = $results_gd->fetch_array();
    echo "<h3>Name of the disease:</h3>".$row_gd['Name']."<br><h3>Description:</h3>".$row_gd['description']."<br><h3>Referances:</h3>".$row_gd['referance']."<br><br><br>"."-------X-------<br>";

    $q2 = "SELECT * FROM `mutations` WHERE `Name` LIKE '$Name'";
    $results_m = $con->query($q2);
    echo "<h3>List of mutations:----</h3>";
    while($row_m = $results_m->fetch_array()){
        echo "<h4>Chromosome affected:</h4>".$row_m['ch_aff']."<br><h4>Gene affected:</h4>".$row_m['gene_aff']."<br><h4>Mutation type:</h4>".$row_m['m_type']."<br><h4>Inheritance pattern:</h4>".$row_m['inheritance']."<br><br><br>"."-------X-------<br>";
    }
    
    $q3 = "SELECT * FROM `varient` WHERE `Name` LIKE '$Name'";
    $results_v = $con->query($q3);
    echo "<h3>List of varients:</h3>";
    $row_v = $results_v->fetch_array();
    echo $row_v['varient']."<br>";
     
    
}else{
    $Name = $_POST['Name_M'];
    $q1 = "SELECT * FROM `disease` WHERE `gene_aff` LIKE '$Name'";#SELECT * FROM disease WHERE Name LIKE 'Marfan syndrome'
    $results_gd = $con->query($q1);
    $row_gd = $results_gd->fetch_array();
    echo "<h3>Name of the disease:</h3>".$row_gd['Name']."<br><h3>Description:</h3>".$row_gd['description']."<br><h3>Referances:</h3>".$row_gd['referance']."<br><br><br>"."-------X-------<br>";

    $q2 = "SELECT * FROM `mutations` WHERE `gene_aff` LIKE '$Name'";
    $results_m = $con->query($q2);
    echo "<h3>List of mutations:----</h3>";
    while($row_m = $results_m->fetch_array()){
        echo "<h4>Chromosome affected:</h4>".$row_m['ch_aff']."<br><h4>Gene affected:</h4>".$row_m['gene_aff']."<br><h4>Mutation type:</h4>".$row_m['m_type']."<br><h4>Inheritance pattern:</h4>".$row_m['inheritance']."<br><br><br>"."-------X-------<br>";
    }
    
    $q3 = "SELECT * FROM `varient` WHERE `gene_aff` LIKE '$Name'";
    $results_v = $con->query($q3);
    echo "<h3>List of varients:</h3>";
    while($row_v = $results_v->fetch_array()){
        echo "<br>".$row_v['varient']."<br>";
    }  
}
#$up_name = strtoupper($name);
#echo ($up_name);
?>


    <h1 style="color: brown; background-color: brown;">END</h1>
</body>
</html>