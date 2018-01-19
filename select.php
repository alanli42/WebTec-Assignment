<?php

include "get_units.php";

$connect = new PDO("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");
$output  = '';

//$sql = "SELECT * FROM assessments ORDER BY id DESC";
$query = "SELECT * FROM assessments ORDER BY id DESC";

$output .= '
         <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="40%">Id</th>  
                     <th width="80%">Title</th>  
                     <th width="80%">Type</th>
                     <th width="80%">Number</th>
                     <th width="100%">Restrictions</th>
                     <th width="100%">Individual or group</th>
                     <th width="100%">Weighting</th>
                     <th width="90%">Issue date</th>
                     <th width="90%">Handin date</th>
                     <th width="100%">Planned feedback date</th>
                     <th width="100%">Mode of submission</th>
                     <th width="100%">Number of copies</th>
                     <th width="100%">Anonymous marking</th>
                     <th width="90%">Grade marking</th>
                     <th width="90%">Unit id</th>
                     <th width="70%">Delete</th>  
                </tr>';
//if (mysql_num_rows($result)==0)
if ($result = $connect->query($query))
//if(mysql_num_rows($result) > 0)  
    {
    //while ($row = mysql_fetch_array($result)) 
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        
        $output .= '
                    <tr>
                        <td>'.$row["id"].'</td> 
                        
                        <td class="title" data-id1="' . $row["id"] . '" 
                        connecteditable>' . $row["title"] . '</td>
                        
                        <td class="type" data-id2="' . $row["id"] . '" 
                        connecteditable>' . $row["type"] . '</td>
                        
                        <td class="number" data-id3="' . $row["id"] . '" 
                        connecteditable>' . $row["number"] . '</td>
                        
                        <td class="restrictions" data-id4="' . $row["id"] . '" 
                        connecteditable>' . $row["restrictions"] . '</td>
                        
                        <td class="is_group" data-id5="' . $row["id"] . '" 
                        connecteditable>' . $row["is_group"] . '</td>
                        
                        <td class="weighting" data-id6="' . $row["id"] . '" 
                        connecteditable>' . $row["weighting"] . '</td>
                        
                        <td class="issue_date" data-id7="' . $row["id"] . '" 
                        connecteditable>' . $row["issue_date"] . '</td>
                        
                        <td class="handin_date" data-id8="' . $row["id"] . '" 
                        connecteditable>' . $row["handin_date"] . '</td>
                        
                        <td class="planned_feedback_date" data-id9="' . $row["id"] . '" 
                        connecteditable>' . $row["planned_feedback_date"] . '</td>
                        
                        <td class="mode_of_submission" data-id10="' . $row["id"] . '" 
                        connecteditable>' . $row["mode_of_submission"] . '</td>
                        
                        <td class="number_of_copies" data-id11="' . $row["id"] . '" 
                        connecteditable>' . $row["number_of_copies"] . '</td>
                        
                        <td class="anonymous_marking" data-id12="' . $row["id"] . '" 
                        connecteditable>' . $row["anonymous_marking"] . '</td>
                        
                        <td class="grade_marking" data-id13="' . $row["id"] . '" 
                        connecteditable>' . $row["grade_marking"] . '</td>
                        
                        <td class="unit_id" data-id14="' . $row["id"] . '" 
                        connecteditable>' . $row["unit_id"] . '</td>
                        
                        <td><button name="btn_delete" id="btn_delete"
                        data-id15="' . $row["id"] . '">x</button></td>
      
    ';                 
    }
            
          $output .= ' <hr> <select name="unit_id" required>';
    
                        
    while ($unit = $units->fetch()) {
                        
        $output .= '<option value="' . $unit[id] . '">' . $unit[unit_title] . '</option>';
                    
        
    }
        
    $output .= ' </select>';
    $output .= '  
           <tr>  
                <td></td>  
                <td id="title" contenteditable></td>  
                <td id="type" contenteditable></td>  
                <td id="number" contenteditable></td>  
                <td id="restrictions" contenteditable></td>  
                <td id="is_group" contenteditable></td> 
                <td id="weighting" contenteditable></td>  
                <td id="issue_date" contenteditable></td>
                <td id="handin_date" contenteditable></td>  
                <td id="planned_feedback_date" contenteditable></td>
                <td id="mode_of_submission" contenteditable></td>  
                <td id="number_of_copies" contenteditable></td>
                <td id="anonymous_marking" contenteditable></td>  
                <td id="grade_marking" contenteditable></td>  
                <td id="unit_id" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr> ';

    }

else {
    $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';
}
$output .= '</table>  


      </div>';
echo $output;




?>