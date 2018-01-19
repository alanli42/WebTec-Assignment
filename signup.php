<!DOCTYPE html>
<html>

<head>
          <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Log in</title>
</head>

<body>

	<div id="navbar1" class = "navbar navbar-inverse navbar-static-top">
		<div class = "container">
		
			<a href = "#" class = "navbar-brand">Sign up</a>
			
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>
			
			<div class = "collapse navbar-collapse navHeaderCollapse">
			
				<ul class = "nav navbar-nav navbar-right">
				
					<li><a href = "index.html">Log in</a> </li>
                    <li class = "active"><a href = "signup.php">Sign up</a> </li>
                    <li class = "dropdown">
					
				</ul>
										
					
				
			
			</div>
			
		</div>
	</div>
										
					
				


    <main class="lead" "container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                
                
                <h3>Sign up</h3>
    
                            <fieldset>
                            <form id="myForm" method="post" action="processform.php">

                            Username: <br><input name="username" /><br/>
                            Password: <br><input name="password" type="password" /> <br/>
                            Name: <br><input name="name" /><br/>
                            Avatar URL: <br><input name="avatar" /><br/>
                            <br>
                            <button id="sub">Register</button>
                            
                                </form>
                            </fieldset>
                            <span id="result"></span>
                    </div>
            </div>
            </div>
    </main>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/scripts1.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
