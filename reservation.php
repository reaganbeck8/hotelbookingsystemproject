<?php include_once 'includes/conn.php' ;
    include_once 'includes/functions.php';

session_start();


$userReservation = new userReservation();






?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Reservation | City Escape</title>
    </head>
    <body>
    <h1>Details</h1> <br/>
        <h1><?php echo $_SESSION['name'];?></h1>
        <h1><?php echo $_SESSION['surname'];?></h1>
        <h1><?php echo $_SESSION['hotelname'];?></h1>
        <h1><?php echo $_SESSION['arrival'];?></h1>
        <h1><?php echo $_SESSION['departure'];?></h1>
        <h1><?php echo $_SESSION['days']->format('%a');?> </h1>
        <h1><?php echo $_SESSION['totalcost'];?> </h1>
    </body>
    </html>
