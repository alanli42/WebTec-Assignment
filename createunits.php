<?php include "get_user.php"; ?>
<?php include "get_assessments.php"; ?>

<?php
   session_start();
   // Test that the authentication session variable exists
   if ( !isset ($_SESSION["gatekeeper"]))
   {
   	echo "You're not logged in. <a href='signup.php'>Sign up</a> or <a href='login.html'>login</a>";
   }
   else
   {
    ?>
<!DOCTYPE html>
<html>

<head>
          <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <title>Homepage</title>
</head>


<body>


    <div id="navbar1" class="navbar navbar-inverse navbar-static-top">
        <div class="container">

            <a href="#" class="navbar-brand">Create Assessment</a>

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href = "index.php">Dashboard</a> </li>
                    <li class="active"><a href="create.php">Create Assessment</a> </li>
                    <li class="dropdown">

                </ul>




            </div>

        </div>
    </div>


    <main class="lead" "container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div style="float: right">
                    <?php echo "Welcome: " .$userRecord[name];?>
                    <p>
                        <a href='logout.php'>Log Out!</a>
                    </p>
                </div>
                <div class="well well-sm">

                    <h2 class="text-danger text-center">Create Assessment</h2>
                </div>

                <h3>Create Your Assessment</h3>


            </div>
        </div>
        <ul>
  <li><a class="active" href="createunits.php">Create units </a></li>
  <li><a href="create.php">Create Assessment</a></li>
  <li><a href="createdetails.php">Create Details</a></li>
  <li><a href="#about">About</a></li>
</ul>


        
        <form id="myForm" name="create" method="post" action="processunits.php">
                <label>
                Unit Code:
                <br />
                <input type="text" name="code">
                <br /> Unit Title:
                <br />
                <input type="text" name="unit_title">
                <br /> Unit Leader:
                <br />
                <input type="text" name="leader">
                <br /> Unit Level:
                <br />
                <input type="number" name="level" min="3" max="8">
                </form>
                <button id="sub">Update Units</button>
                </label>
            

                <span id="result"></span>
                
            
                <div>
                    <div id="live_data"></div>
                </div>
        
               

    
    
       

        
        
        
        
                
                    
                

    </main>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/scripts1.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
<?php
   }
   ?>