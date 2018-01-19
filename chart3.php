<?php 
//index.php
$conn = new PDO("mysql:host=localhost;dbname=halanli;", "halanli", "oizatozi");
$query = "SELECT * FROM assessments";
$assessments = $conn-> query($query);
$chart_data = '';
while ($assessment = $assessments->fetch())
//while ($assessment = $assessments->fetch())
{
 $chart_data .= "{ Assessment Title:'".$assessment["title"]."', Assessment Type:".$assessment["type"].", Mode of Sumbission:".$assessment["mode_of_submission"].", Assessment Number:".$assessment["number"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>Assessments</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">All Assessments</h2>
   <h3 align="center">Assessment Title, Type, Mode of Submission and Number.</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'title',
 ykeys:['type', 'mode_of_submission', 'number'],
 labels:['type', 'mode_of_submission', 'number'],
 hideHover:'auto',
 stacked:true
});
</script>