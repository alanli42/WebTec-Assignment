<?php

include "connect.php";

$id = $_GET[id];

$query = "  SELECT *
			FROM details
			WHERE assessment.id = $id
		";
	
$result = $conn->query($query);

$details = array();

while ($details = $result->fetch()) {
	array_push($details, $detail);
}

?>