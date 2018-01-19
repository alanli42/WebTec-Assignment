<!DOCTYPE html>
<html>

<head>
         <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Log in</title>
</head>

<body>

	<div  id="navbar1" class = "navbar navbar-inverse navbar-static-top">
		<div class = "container">
		
			<a href = "#" class = "navbar-brand">Log in</a>
			
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>
			
			<div class = "collapse navbar-collapse navHeaderCollapse">
			
				<ul class = "nav navbar-nav navbar-right">
				
                    <li class = "active"><a href = "index.html">Log in</a> </li>
					<li><a href = "signup.php">Sign up</a> </li>
                    <li class = "dropdown">
					
				</ul>
										
					
				
			
			</div>
			
		</div>
	</div>

    <main class="lead" "container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">

                <h3>Log in</h3>
				
				<div style="float: center">
        <form action="loginprocess.php" method="post">
            <fieldset>
                <label for="username">Username <br/>
                <input name="username" type="text" />
                
                <label for="password">Password <br/>
                <input name="password" type="password" />
                
                <input type="submit" />
                </label>
                
            </fieldset>
        </form>
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
                
                