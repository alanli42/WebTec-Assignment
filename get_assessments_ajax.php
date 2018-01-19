<?php


	session_start();
	// Test that the authentication session variable exists
    
	$a= $_GET["type"];
    $id = $_GET["id"];


   

	$conn = new PDO ("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");

    $results = $conn->query("select * from assessments where type='$a'");
    while($row=$results->fetch())

	{
		echo "<table border=\"1\"><tr>";
		echo " <th>Assessment Type:</th>";
        echo " <th>Assessment Title:</th>";
        echo " <th>Assessment Number:</th>";
        echo " <th>Hand in Date:</th> ";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$row[type]</td> " ;
        echo "<td>$row[title]</td> " ;
        echo "<td>$row[number] </td> ";
        echo "<td>$row[handin_date] </td>" ;
        echo "</tr>";
        echo "</table>";
        echo "<a href='view.php?id=$row[id]'>View Assessment</a></br>";
        echo "<a href='viewpic.php?id=$row[id]'>View Picture</a></br>";
		echo "</p>";
		
		
	}
	



?>