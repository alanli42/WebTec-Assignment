<?php

include "connect.php";

session_start();
$user_id = $_SESSION[gatekeeper];


$query = "   SELECT *
                FROM d_users
                WHERE d_users.id = $user_id";




$result = $conn->query($query);
$userRecord = $result->fetch();
?>