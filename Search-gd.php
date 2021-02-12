<?php

$con = mysqli_connect("localhost","root","","DDCM") or die("Failed to connect to MySQL:".mysqli_error());

$id = $_POST['database'];

if($id == "gd"){
    $Name = $_POST['Name_D'];
    
    $q1 = "SELECT * FROM `disease` WHERE `Name` LIKE '$Name'";#SELECT * FROM disease WHERE Name LIKE 'Marfan syndrome'
    $results_gd = $con->query($q1);
    while($row_gd = $results_gd->fetch_array()){
        #echo $row_gd;
        #echo $Name;
        echo "Name of the disease:".$row_gd['Name']."<br>Description:"."<br>".$row_gd['description']."<br><br>Referances:<br>".$row_gd['referance']."<br><br><br>"."-------X-------<br><br>";
    }

    $q2 = "SELECT * FROM `mutations` WHERE `Name` LIKE '$Name'";
    $results_m = $con->query($q2);
    while($row_m = $results_m->fetch_array()){
        echo "List of mutations:----"."<br>Chromosome affected: ".$row_m['ch_aff']."<br>Gene affected: ".$row_m['gene_aff']."<br>Mutation type: ".$row_m['m_type']."<br>Inheritance pattern:".$row_m['inheritance']."<br><br>Description:<br>".$row_m['description']."<br><br>Referances:<br>".$row_m['reference']."<br><br><br>"."-------X-------<br><br>";
    }
    
    $q3 = "SELECT * FROM `varient` WHERE `Name` LIKE '$Name'";
    $results_v = $con->query($q3);
    while($row_v = $results_v->fetch_array()){
        echo "List of varients:<br><br> ".$row_v['varient']."<br><br><br>"."END OF List of varients";
    } 
    
}else{
    $Name = $_POST['Name_M'];
    $q1 = "SELECT * FROM `disease` WHERE `gene_aff` LIKE '$Name'";#SELECT * FROM disease WHERE Name LIKE 'Marfan syndrome'
    $results_gd = $con->query($q1);
    while($row_gd = $results_gd->fetch_array()){
        echo "<h1>Name of the disease:</h1>".$row_gd['Name']."<br><br>Description:"."<br>".$row_gd['description']."<br><br>Referances:<br>".$row_gd['referance']."<br><br><br>"."-------X-------<br><br>";
    }

    $q2 = "SELECT * FROM `mutations` WHERE `gene_aff` LIKE '$Name'";
    $results_m = $con->query($q2);
    while($row_m = $results_m->fetch_array()){
        echo "List of mutations:----"."<br>Chromosome affected: ".$row_m['ch_aff']."<br>Gene affected: ".$row_m['gene_aff']."<br>Mutation type: ".$row_m['m_type']."<br>Inheritance pattern:".$row_m['inheritance']."<br><br>Description:<br>".$row_m['description']."<br><br>Referances:<br>".$row_m['reference']."<br><br><br>"."-------X-------<br><br>";
    }
    
    $q3 = "SELECT * FROM `varient` WHERE `gene_aff` LIKE '$Name'";
    $results_v = $con->query($q3);
    while($row_v = $results_v->fetch_array()){
        echo "List of varients:<br><br> ".$row_v['varient']."<br><br><br>";
    }  
}
#$up_name = strtoupper($name);
#echo ($up_name);

?>