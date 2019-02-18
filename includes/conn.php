<?php 


//including the base file for the creation of the connection

    include_once 'base.php'; 
    
    //establishing the connection to the database
    
    $db_server = new mysqli(db_host, db_user, db_pass, db_name); 

    //testing the connection

    if ($db_server->connect_error) {
        echo "Failed to connect" . " " .  $db_server->connect_error;
    }

   
?>










