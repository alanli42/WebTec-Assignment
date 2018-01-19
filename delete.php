<?php
$connect = new PDO ("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");

$query = "DELETE FROM assessments WHERE id ='".$_POST["id"]."'";  
if ($result = $connect->query($query))
{
    echo 'Data Deleted';
}
 else{
     echo 'Error';
     } 
?>
