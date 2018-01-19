<?php include "retrieveAvatar1.php"; ?>
<?php include "get_assessments.php";?>

<?php
    include "connect.php";
	//$conn = new PDO ("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");
    $user_id = $_SESSION[gatekeeper];
    
    $u_code= $_POST["code"];
    $u_title=     $_POST["unit_title"];
    //$u_leader=   $_POST["leader"];
    $u_level=   $_POST["level"];

    

    echo "<div>";
	echo "Assessments and Units has been updated!<br />";
	echo "Assessment Number: $nu <br />";
	echo "Assessment title: $title <br />";
	echo "Hand in Date: $handin_d <br />";
    echo "Unit Code: $u_code <br />";
    echo "Unit Title: $u_title <br />";
    echo "Unit Leader: $u_leader <br />";
    echo "Level: $u_level <br />";
    echo "<a href='createdetails.php' ?>Create Details</a></br>";
    echo "</div>";

        
    $sql = "INSERT INTO units (code, unit_title, leader, level ) VALUES ( '$u_code', '$u_title', '$user_id', ' $u_level' )";
    
   
    
	$result = $conn->query($sql);
    //$id = $conn->mysql_insert_id();
		
    $_SESSION["gatekeeper"] = $user_id

?>
