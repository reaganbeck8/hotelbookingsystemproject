<?php include_once 'includes/conn.php' ;

session_start();









?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Document</title>
    </head>
    <body>
    <h1>Details</h1> <br/>
        <h1><?php echo $_SESSION['name'];?></h1>
        <h1><?php echo $_SESSION['surname'];?></h1>
        <h1><?php echo $_SESSION['hotelname'];?></h1>
        <h1><?php echo $_SESSION['arrival'];?></h1>
        <h1><?php echo $_SESSION['departure'];?></h1>
        <h1><?php echo $_SESSION['days']->format('%a') . " " . "days"?> </h1>
    </body>
    </html>