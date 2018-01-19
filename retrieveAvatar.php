<?php

include "connect.php";

$id = $_GET["id"];

$query = "  SELECT *
			FROM d_users  "
    . "WHERE d_users.name = '$id' LIMIT 0, 30 ";

    $avatarss = $conn-> query($query);

?>