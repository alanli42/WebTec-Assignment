<?php
$connect = new PDO ("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");

$id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  

 $query = "UPDATE assessments SET ".$column_name."='".$text."' WHERE id='".$id."'";  

 //if(mysql_query($connect, $sql))  
if ($result = $connect->query($query))

 {  
      echo 'Data Updated';  
 }  
 ?>

