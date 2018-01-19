<?php include "get_assessments.php"; ?>
<?php include "get_user.php"; ?>

<?php
   session_start();
   // Test that the authentication session variable exists
   if ( !isset ($_SESSION["gatekeeper"]))
   {
   	echo "You're not logged in. <a href='signup.php'>Sign up</a> or <a href='login.html'>login</a>";
   }
   else
   {
       $user_id = $_SESSION["gatekeeper"];
    ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>   
      <script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);
         
         function drawChart() {
         
           var data = google.visualization.arrayToDataTable([
             ['Assessment Title', 'Assessment Weighting'],
             
             <?php
            $assessments = $assessments->fetchAll();
            foreach ($assessments as $assessment)
            {
            echo "['".$assessment['title']."',".$assessment['weighting']."],";
            
            }
            //mysql_data_seek($query, 0);
            
               ?>
         
           ]);
         
           var options = {
             title: 'Assessment Weightings',
             is3D:true,
           };
         
           var chart = new google.visualization.PieChart(document.getElementById('piechart'));
         
           chart.draw(data, options);
         }
      </script>
      <script type='text/javascript'>
         function typerequest()
         {
             // Create the XMLHttpRequest variable.
             // This variable represents the AJAX communication between client and
             // server.
             var xhr2 = new XMLHttpRequest();
         
             // Read the data from the form fields.
             var a = document.getElementById("type").value;
            
         
             // Specify the CALLBACK function. 
             // When we get a response from the server, the callback function will run
             xhr2.addEventListener ("load", resultsReturned);
         
             // Open the connection to the server
             // We are sending a request to "flights.php" and passing in the 
             // destination and date as a query string. 
             xhr2.open('GET','get_assessments_ajax.php?type=' + a );
         
             // Send the request.
             xhr2.send();
         }
         
         // The callback function
         // It simply places the response from the server in the div with the ID
         // of 'response'.
         
         // The parameter "e" contains the original XMLHttpRequest variable as
         // "e.target".
         // We get the actual response from the server as "e.target.responseText"
         function resultsReturned(e)
         {
             document.getElementById('results').innerHTML = e.target.responseText;
         }
         
      </script>
      <title>Homepage</title>
   </head>
   <body onload="renderTime(); ">
      <div id="navbar1" class = "navbar navbar-inverse navbar-static-top">
         <div class = "container">
            <a href = "#" class = "navbar-brand">Dashboard</a>
            <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            </button>
            <div class = "collapse navbar-collapse navHeaderCollapse">
               <ul class = "nav navbar-nav navbar-right">
                  <li class = "active"><a href = "index.php">Dashboard</a> </li>
                  <li><a href = "create.php">Create Assessment</a> </li>
                  <li class = "dropdown">
               </ul>
            </div>
         </div>
      </div>
      <main class="lead" "container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div style="float: right">
                  <?php
                     echo "Welcome: " .$userRecord[name];
                     ?>
                  <p>
                     <a href='logout.php'>Log Out!</a>
                  </p>
               </div>
               <div class="well well-sm">
                  <img id="imageicon" src="css/images/image1.jpg" >
                  <h2 class="text-danger text-center">Dashboard</h2>
               </div>
               <div class="heading">
               </div>
               <div class="user one">
                  <h1><?php echo $userRecord[name]; ?>'s Avatar</h1>
                  <img style="height:120px; width:120px" src="<?php echo $userRecord[avatar]; ?>" />
               </div>
               
                  <div id="columnchart_values">
                  </div>
                  <div id="piechart" >
                  </div>
              
                <hr style="background:#CC3333; border:0; height:7px" />
               <div id="searchbar">
                  <p>Search Assessments by<b>"Type"</b> Example: <b>Presentation, Literature Review, Pilot Study</b></p>
                  <input id="type" type="tex" name="type" onkeyup="typerequest()" />
                  <input type="button" value="Search Assessment!" onclick="typerequest()" />
                  <div id="results"></div>
               </div>
                <hr style="background:#CC3333; border:0; height:7px" />
              
                <div id="piechart2">
                </div>
                
                <div id="container">
                </div>
        
               <p align="left">You can also check your Assessments from below: </p>
               <ul>
                  <?php foreach ($assessments as $assessment){ ?>
                  <table>
                     <tr>
                        <th>Assessment title</th>
                        <th>Hand in Date</th>
                     </tr>
                     <tr>
                        <td><?php echo $assessment[title] ?></td>
                        <td><?php echo $assessment[handin_date] ?></td>
                        <a class="viewa" href="view.php?id=<?php echo $assessment[a_id]; ?>">View Assessment</a>
                        <a class="viewa" href="viewpic.php?id=<?php echo $assessment[a_id]; ?>">View Picture</a>
                     </tr>
                  </table>
                  <?php  } ?>
               </ul>
               
            </div>
         </div>
          
         <div>
            <marquee behavior="scroll" bgcolor="red" loop="-1" width="100%">
               <i>
               <font color="white">
               Today's date is : 
               <strong>
               <span id="clockDisplay"></span>
               </strong>           
               </font>
               </i>
            </marquee>
            <div id="clockDisplay" class="containerone"></div>
         </div>
         </div>
      </main>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </body>
</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart() {
     var data = google.visualization.arrayToDataTable([
       ["Units", "Assessments", { role: "style" } ],
       ["Pilot Project", 2, "#A52A2A"],
       ["Usability & UX Design", 1, "#FFB6C1"],
     ]);
   
     var view = new google.visualization.DataView(data);
     view.setColumns([0, 1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                      2]);
   
     var options = {
       title: "Units and Assessments",
   
       bar: {groupWidth: "95%"},
       legend: { position: "none" },
     };
     var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
     chart.draw(view, options);
   }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Assessments', 'Hand in Dates'],
<?php foreach ($assessments as $assessment) 
{
    echo "['".$assessment['unit_title']."',".$assessment['level']."],";
    
}
   ?>                      
         
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Assessments With Unit Title & Unit Levels' };

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}
</script>


<script language="JavaScript">
function drawChart() {
   // Define the chart to be drawn.
   var data = google.visualization.arrayToDataTable([
      ['Assessments', 'Number of Copies'],
<?php foreach ($assessments as $assessment) 
{
    echo "['".$assessment['title']."',".$assessment['number_of_copies']."],";
    
}
   ?>                      
      ]);

   var options = {
      title: 'Assessments Number of copies'	  
   }; 

   // Instantiate and draw the chart.
   var chart = new google.visualization.BarChart(document.getElementById('container'));
   chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>
<?php
   }
   ?>