<?php include "retrieveAvatar1.php"; ?>
<?php include "get_assessments.php";?>

<?php
    include "connect.php";
	//$conn = new PDO ("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");
	$nu=   $_POST["number"];
    $user_id = $_SESSION[gatekeeper];
	$ty=   $_POST["type"];
	$re=   $_POST["restrictions"];
    $is_g= $_POST["is_group"];
    $we=   $_POST["weighting"];
    $issue_d=   $_POST["issue_date"];
    $handin_d=  $_POST["handin_date"];
    $planned_f= $_POST["planned_feedback_date"];
    $mode=      $_POST["mode_of_submission"];
    $nu_co=     $_POST["number_of_copies"];
    $anonymous= $_POST["anonymous_marking"];
    $title=     $_POST["title"];
    $grade_m=   $_POST["grade_marking"];
    $unit_id=   $_POST["unit_id"];
        
    

    

    echo "<div>";
	echo "Assessments has been updated!<br />";
	echo "Assessment Number: $nu <br />";
	echo "Assessment title: $title <br />";
	echo "Hand in Date: $handin_d <br />";
    echo "</div>";


	
	
    
    $sqll = "INSERT INTO assessments (number, type, restrictions, is_group, weighting, issue_date, handin_date, planned_feedback_date, mode_of_submission, number_of_copies, anonymous_marking, title, grade_marking, unit_id ) VALUES ( '$nu', '$ty', '$re', '$is_g', '$we', '$issue_d', '$handin_d', '$planned_f', '$mode', '$nu_co', '$anonymous', '$title', '$grade_m', '$unit_id' )";
    
   echo $sqll;
    
   
    

    $result = $conn->query($sqll);
    //$id = $conn->mysql_insert_id();
		
    $_SESSION["gatekeeper"] = $user_id

?>
