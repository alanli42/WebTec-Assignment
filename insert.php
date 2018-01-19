<?php include "get_units.php"; ?>

<?php  
	$connect = new PDO ("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");
  
      //  $title= $_POST["title"];
       // $type= $_POST["type"];

       // echo 'Data Inserted';


       // $sql = "INSERT INTO assessments (title, type ) VALUES ( '$title', '$type')";
        //$result = $connect->query($sql);
   
     $query = "INSERT INTO assessments (number, type, restrictions, is_group, weighting, issue_date, handin_date, planned_feedback_date, mode_of_submission, number_of_copies, anonymous_marking, title, grade_marking, unit_id ) VALUES('".$_POST["number"]."', '".$_POST["type"]."', '".$_POST["restrictions"]."', '".$_POST["is_group"]."', '".$_POST["weighting"]."', '".$_POST["issue_date"]."', '".$_POST["handin_date"]."', '".$_POST["planned_feedback_date"]."', '".$_POST["mode_of_submission"]."', '".$_POST["number_of_copies"]."', '".$_POST["anonymous_marking"]."', '".$_POST["title"]."', '".$_POST["grade_marking"]."', '".$_POST["unit_id"]."')";


    $result = $connect->query($query);

//if(mysql_query($sql, $connect)) 
if ($result = $connect->query($query))

 {  
      echo 'Data Inserted';  
 }  
 else{
     echo 'Error';
     } 
 ?>