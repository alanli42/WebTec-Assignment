<?php include "retrieveAvatar1.php"; ?>
<?php include "get_assessmentss.php"; ?>


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



                <form id="myForm" name="create" method="post" action="processform3.php">
                <label>
                <br />Assessment Title
                
                    <select name="assessment_id" required>
                        <!--loop here-->
                        <?php while ($assessment = $assessments->fetch()){ ?>
                        
                        <option value="<?php echo $assessment[id]; ?>"><?php echo $assessment[title]?></option>
                        <!--//end of loop-->
                                                <?php  } ?> 

                    </select>
                
                <br />
                Assessment Details:   <textarea name="description" rows="10" cols="30">Please paste Assessment Task and Assessment Criteria to here...</textarea>
                <br>
                </form>
                <button id="sub">Update Assessment details</button>
                </label>
                <span id="result"></span>
           

    </main>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/scripts1.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
<?php
   }
   ?>