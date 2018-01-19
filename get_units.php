<?php


    //connec to the database
    include "connect.php";
    //query the database for pokemons

   $query =    "SELECT * "
    . "FROM units  ";
       
                //"SELECT * 
               // FROM d_collections c, d_pokemons p 
               // WHERE c.user_id = '$id'
              //  AND c.pokemon_id = p.id";

    $units = $conn-> query($query);
   
 
?>