<?php include "get_assessments.php"; ?>
<?php include "retrieveAvatar1.php"; ?>

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
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>   

      <title>Homepage</title>
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
       
       
       
       
       
       
       
       
       
   </head>
   <body>
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
               <div id="piechart" >
               </div>
               <h3>Here is your Assignment list</h3>
               <div class = "graph"> 
                  <img src="graph.php" />
               </div>
<h2 align="center">
Type of Venue:<br/>
<input id="type" name="type" onkeyup="typerequest()" /> <br/>

<input type="button" value="Go!" onclick="typerequest()" />
</h2>

<div id="results"></div>
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
<?php
   }
   ?>