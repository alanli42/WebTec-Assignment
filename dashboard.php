<?php include "get_assessments.php" ?>

<!DOCTYPE html>
<html>

<head>
         <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <title>Homepage</title>
</head>

<body>


	<div  id="navbar1" class = "navbar navbar-inverse navbar-static-top">
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
                            echo "Welcome: " .$_SESSION["gatekeeper"];
                        ?>
                        <p>
                            <a href='logout.php'>Log Out!</a>
                        </p>
                    </div>
                <div class="well well-sm">

                    <h2 class="text-danger text-center">Dashboard</h2>
                </div>
                <h2>Your Avatar</h2>
                  <img src="graph4.php" />
                      <h3>Here is your Assignment list</h3>
                        <img src="graph.php" />
                      <h3>Gotta Catch 'em All!</h3>
                      <p> Welcome Red </p>
                <div> 
                      <p> Here are your pokemons </p>
                        <ul>
                        <?php while ($pokemon = $pokemons->fetch()){ ?>
                            
                            <li><?php echo $pokemon[name] ?></li>
                            
                            
                        <?php  } ?>
                    
                        </ul>
                </div>
            </div>
			
			
			
			<div>

				
				<img src="graph2.php" />
                <img src="graph3.php" />
			</div>
			
        </div>
    </main>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
</body>

</html>