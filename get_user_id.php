<?php
    include "connect.php";

    $user_id = $_SESSION[gatekeeper];


 

// get all user assessments
    $query =      "SELECT *, assessments.id as a_id \n"
                . "FROM units, assessments \n"
                . "WHERE assessments.unit_id=units.id\n"
                . "AND units.leader_id = user_id\n"
                . " LIMIT 0, 30 ";
     
      
?>