<?php
    include "connect.php";

    $id = $_GET["id"];

    session_start();
    $untrusted_username = $_POST["username"];
    $untrusted_password = $_POST["password"];

                $query =   "SELECT * 
                            FROM d_users 
                            WHERE username='$untrusted_username' 
                            AND password='$untrusted_password'";

                $result = $conn->query($query);
                $userRecord = $result->fetch();

                if (!empty($userRecord)) {

                    // Remember the user
                    $_SESSION["gatekeeper"] = $userRecord[id];

                    //redirect to dashboard

                    header ('Location: index.php');

                }
                else {

                    // Redirect to the main menu
                    header ("Location: login.php");
                }

?>