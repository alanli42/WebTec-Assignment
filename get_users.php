<?php

    //User id
    $id = $_GET["id"];

    //connec to the database
    include "connect.php";
    //query the database for pokemons

   $query =                "SELECT * 
                            FROM d_users '";


       
                //"SELECT * 
               // FROM d_collections c, d_pokemons p 
               // WHERE c.user_id = '$id'
              //  AND c.pokemon_id = p.id";

    $result = $conn->query($query);
    //$user = $result->fetch();

      
?>


                 