<?php

include "connect.php";

session_start();
$user_id = $_SESSION[gatekeeper];


$query = "   SELECT *
                FROM d_users, assessments, units
                WHERE d_users.id = $user_id
                AND assessments.unit_id = units.id
                AND units.leader = d_users.name
                AND d_users.name = units.leader ";




$result = $conn->query($query);
$userRecord = $result->fetch();
?>