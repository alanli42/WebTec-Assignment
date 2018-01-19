<?php

    $id = $_GET["id"];
   


	$conn = new PDO("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");

    $results = $conn->query("SELECT units.id, units.unit_title, units.code, units.leader, units.level, assessments.title, assessments.number, assessments.type, assessments.restrictions, assessments.is_group, assessments.weighting, assessments.issue_date, assessments.handin_date, assessments.planned_feedback_date, assessments.mode_of_submission, assessments.number_of_copies, assessments.grade_marking, assessments.image,  assessments.anonymous_marking\n"
    . "FROM units, assessments\n"
    . "WHERE units.id=unit_id LIMIT 0, 30 ");
    $row = $results->fetch();

    
	
    
?>