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
  <li><a href="create_details.php">Create Details</a></li>
  <li><a href="#about">About</a></li>
</ul>


        
        <form id="myForm" name="create" method="post" action="processform2.php">
            <label>
                Assessment Title:
                <input type="text" name="title">
                <br /> Assessment Number:
                <br />
                <input type="text" name="number">
                <br /> Assesment Type:
                <br />
                <input type="text" name="type">
                <br /> Restrictions on Time/Length:
                <br />
                <input type="text" name="restrictions">
                <br /> Individual/Group:
                <br />
                <input type="text" name="is_group">
                <br /> Assessment Weighting:
                <br />
                <input type="text" name="weighting">
                <br /> Issue Date:
                <br />
                <input type="date" name="issue_date">
                <br />
            </label>   
                <label>
                Hand In Date:
                <br />
                <input type="date" name="handin_date">
                <br /> Feedback Date:
                <br />
                <input type="date" name="planned_feedback_date">
                <br /> Mode of Submission:
                <br />
                <input type="text" name="mode_of_submission" />
                <br /> Number of copies:
                <br />
                <input type="number" name="number_of_copies" min="1" max="5">
                <br />
                    Anonymous marking:
                    <input type="radio" name="anonymous_marking" value="yes"> Yes
                    <br>
                    <input type="radio" name="anonymous_marking" value="no"> No
                    <br> Grade Marking:
                    <input type="radio" name="grade_marking" value="yes"> Yes
                    <br>
                    <input type="radio" name="grade_marking" value="no"> No
                    <br>
                    </label>
            
                <label>
                Unit id:
                <br />
                <input type="number" name="unit_id">
                <br />
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
                <button id="sub">Update Assessment and Units table</button>
                </label>
                <span id="result"></span>
                
            
                <a href='createdetails.php'>Create Assessment Details</a></br>
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