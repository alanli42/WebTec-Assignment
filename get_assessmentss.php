<?php

    session_start();
    $user_id = $_SESSION[gatekeeper];

    //connec to the database
    include "connect.php";
    //query the database for pokemons

   $query =    "SELECT *
        FROM assessments";




       
                //"SELECT * 
               // FROM d_collections c, d_pokemons p 
               // WHERE c.user_id = '$id'
              //  AND c.pokemon_id = p.id";

    $assessments = $conn-> query($query);
   


// get user name
//$current_user_record = "SELECT * 
 //       FROM d_users
 //       WHERE d_users.id=$_SESSION('gatekeeper)";


//query executed
//$current_user  = $conn-> query($$current_user_record);

//define user name column record wanted.
//$current_user_name = $current_user[name]

// get all user assessments
//$query =    "SELECT *, assessments.id as a_id "
//    . "FROM units, assessments, d_users "
 //   . "WHERE assessments.unit_id=units.id LIMIT 0, 30 ";
  //      AND units.leader = d_users.name
   //     AND d_users.name = '$current_user_name'
  //      ";
       


//current user -> unit leader (gives unit id) -> get assessments with unitid and displays all for that user.
?>