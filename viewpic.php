<?php include "retrieveAvatar1.php"; ?>
<?php
session_start();
// Test that the authentication session variable exists
if ( !isset ($_SESSION["gatekeeper"]))
{
	echo "You're not logged in. <a href='signup.php'>Sign up</a> or <a href='loginpage.html'>login</a>";
}
else
{
     include "get_assessment.php";

 ?>


<!DOCTYPE html>
<html>

<head>
          <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Assessment</title>
</head>

<body>
    	<div id="navbar1" class = "navbar navbar-inverse navbar-static-top">
		<div class = "container">
		
			<a href = "#" class = "navbar-brand">Assessment Task</a>
			
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>
			
			<div class = "collapse navbar-collapse navHeaderCollapse">
			
				<ul class = "nav navbar-nav navbar-right">
				
				    <li class = "active"><a href = "index.php?id=<?php echo $userRecord[id];?>">Dashboard</a> </li>
                  <li><a href = "create.php?id=<?php echo $userRecord[id];?>">Create Assessment</a> </li>
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
                    <h2 class="text-danger text-center">Southampton Solent University</h2>
                </div>
                

      
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-primary text-center">
                                <h2>Assessment Task Picture</h2>
                                    <img src="<?php echo $assessment[image]; ?>"/>
                            </div>

                </div>
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