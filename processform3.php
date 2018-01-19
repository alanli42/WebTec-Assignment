<?php

    include "connect.php";
	//$conn = new PDO ("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");
    $d_title=           $_POST["title"];
    $d_description=     $_POST["description"];
    $d_aid=            $_POST["assessment_id"];

    
    echo "<div>";
	echo "Assessments Details has been updated!<br />";
	echo "Assessment details Title: $d_title <br />";
	echo "Assessment description: $d_description <br />";
    echo "</div>";

    
    
    $sqlll = "INSERT INTO details ( title, description, assessment_id ) VALUES ('$d_title', '$d_description', '$d_aid' )";
    


    $result = $conn->query($sqlll);
    //$id = $conn->mysql_insert_id();
		

?>
