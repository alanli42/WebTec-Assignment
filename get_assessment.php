<?php

    //User id
    
    $id = $_GET["id"];

    //connec to the database
    include "connect.php";
    //query the database for pokemons

   $query = "SELECT details.id, details.title, details.description, details.assessment_id, units.id, units.unit_title, units.code, units.leader, units.level, assessments.title, assessments.number, assessments.type, assessments.restrictions, assessments.is_group, assessments.weighting, assessments.issue_date, assessments.handin_date, assessments.planned_feedback_date, assessments.mode_of_submission, assessments.number_of_copies, assessments.grade_marking, assessments.image, assessments.anonymous_marking\n"
    . " FROM units, assessments, details\n"
    . " WHERE assessments.id=$id\n"
    . " AND units.id=assessments.unit_id\n"
    . " AND details.assessment_id = assessments.id LIMIT 0, 30 ";
       
                //"SELECT * 
               // FROM d_collections c, d_pokemons p 
               // WHERE c.user_id = '$id'
              //  AND c.pokemon_id = p.id";

    $result = $conn->query($query);
    $assessment = $result->fetch();
     
?>