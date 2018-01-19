<?php

    include "connect.php";

	$username= $_POST["username"];
	$password= $_POST["password"];
    $name=     $_POST["name"];
    $avatar=   $_POST["avatar"];
    



    
        // Required field names
        $sql = array('username', 'password', 'name', 'avatar');

        // Loop over field names, make sure each one exists and is not empty
        $error = false;
        foreach($sql as $field) {
                if (empty($_POST[$field])) {
                        $error = true;
                    }
            }

        if ($error) {
          echo "You did not fill out the required fields.";
             exit();
            } else {
                    
                        $sql = "INSERT INTO d_users (username, password, name, avatar ) VALUES ( '$username', '$password', '$name', '$avatar' )";
                        $result = $conn->query($sql);
    
            
                    echo "You have successfully singed up!<br />";  
                    echo "Your Username: $username <br />";
	                echo "Your Password: $password <br />";
                    echo "Your Name: $name <br />";
	                echo "Your Avatar: $avatar <br />";
	                echo "Go to Login page to Log in<br /> <a href='index.html'>Login</a>";
    
            }


?>