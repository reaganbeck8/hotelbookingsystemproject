<?php session_start(); ?>
 <?php include_once 'includes/conn.php'; 
        include_once 'includes/functions.php';
 
 //initializing the session variables for later reuse
 $_SESSION['name'] = "";
 $_SESSION['surname'] = "";
 $_SESSION['hotelname'] = "";
 $_SESSION['arrival'] = "";
 $_SESSION['departure'] = "";
 $_SESSION['days'] = "";
 
 
 ?>

 <?php 
        $userReservation = new userReservation();
        $userReservation->saveUserData($db_server);
// // function that grabs the information upon submit and enters it into the database

//     if(isset($_POST['insert_data'])) {
        
//         $name =  $_POST['name'];
//         $surname =  $_POST['surname'];
//         $hotelname = $_POST['hotelname'];
//         $arrival =  $_POST['arrival'];
//         $departure = $_POST['departure'];

//         // equating the session variables to the post variable for later re-use on the 'reservation.php' page
//         $_SESSION['name'] = $name;
//         $_SESSION['surname'] = $surname;
//         $_SESSION['hotelname'] = $hotelname;
//         $_SESSION['arrival'] = $arrival;
//         $_SESSION['departure'] = $departure;
 
//         // selecting the database through the connection '$db_server'
//         mysqli_select_db($db_server, 'test_db');

//         // Building a string which will act as our query when inserted into the query function of PHP
//         $sql = "INSERT INTO users (name,surname,hotelname,arrival,departure) VALUES ('$name', '$surname', '$hotelname', '$arrival', '$departure')";

            
//             if ($db_server->query($sql)) {
//               header("location: reservation.php"); //user gets redirected to the reservation page where their reservation can be displayed
//             } else {
//                 echo "Error: " . "<br>" . $sql . "<br>" . $db_server->error; //user will get an error if the booking cannot be saved.
//             }
//     }


   
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City Escape | Hotel Reservation</title>
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/main.css">
    <script>
      
    </script> 
</head>
<body>
<!-- Navigation menu  -->
<nav class="navbar is-success is-fixed-top" id="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <figure id="containerwidth"><a href="#" class="navbar-item" style="padding-top: 0.90rem;"><span class="nav-logo" width="fit-content"></span></a></figure>

                    <span class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>

                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-end">
                        <a href="#" class="navbar-item">Home</a>
                        <a href="#" class="navbar-item">Bookings</a>
                        <a href="#about" class="navbar-item">About</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navigation menu ends here -->

        <!-- Hero containing the greeting text  -->
    <section class="hero is-fullheight">
        <article class="container">
            <div class="columns" id="landing">
                <caption class="column is-half" id="landing-greeting" width="10em" height="10em">
                    <h2 class="title" style="color: #edf2f4 !important;" id="landing-text"><span style="color: #8d99ae !important;">Escaping</span> the city? Make a Reservation. </h2> 
                    <br>
                    <br>
                     
                </caption>
                
                <figure class="column is-half">
                    <span id="landing-image"><img src="images/heroimage.png" width="322.5px" height="450px" id="hero-image"></span>
                </figure>
            </div>
            <span><button class="button is-rounded">Book Now!</button> </span>
        </article>
    </section>
    <!-- Hero ends here -->

    <!-- Hotel Booking form that collects the information from the user -->
    <section class="container">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <h1>name</h1>
                <input class="button is-rounded" type="text" name="name" placeholder="name" required>
            <h1>surname</h1>
                <input class="button is-rounded" type="text" name="surname" placeholder="surname" required> 
            <h1>hotel</h1>
                <select class="button is-rounded" name="hotelname" required>
                    <option value=""></option>
                    <option value="The Silo">The Silo - R13000 per night</option>
                    <option value="The Radisson Red">The Radisson Red - R5000 per night</option>
                    <option value="The Westin" >The Westin - R6400 per night</option>
                </select>
                
            <h1>check-in</h1>
                <input class="button is-rounded" type="date" name="arrival" required>
            <h1>check-out</h1>
                <input class="button is-rounded" type="date" name="departure" required>
                <br>
                    <br>
            <input class="button is-rounded" type="submit" name="insert_data" placeholder="Book Now!"required > 
        </form>
    </section>
    <!-- Booking form ends here -->

    <!-- <section class="new-entry">
        <h1>Reservation details:</h1>
        <h3><?php 
                // include_once 'includes/conn.php';
                // //selecting all info
                // $details = "SELECT * FROM users ORDER BY id DESC"; 
                // $resdetails = $db_server->query($details);

                // while($row = $resdetails->fetch_assoc()){
                //     echo "<br>". $row['id'] ."<br>". $row['name']. "<br>". $row['surname'] ."<br>". "has booked". $row['hotelname'] ;
                // } 
               
                // if(isset($_POST['insert_data']) & $_POST['hotelname'] == "The Silo") {
                //     $price1 = R350;

                //     $cost = $price1 * $days
                // }
                    //finding absolute value from date of booking for price purposes

                    $datetime1 = new DateTime($_POST['arrival']);
                    $datetime2 = new DateTime($_POST['departure']);
                    $_SESSION['days'] = $datetime1->diff($datetime2);
                 
                    mysqli_select_db($db_server, 'test_db');
                    $hotel_res = $db_server->query("SELECT * FROM users");

                    while($row = $hotel_res->fetch_assoc()) {
                        if ($row["name"] == $name) {
                           
                        }
                    }
        ?> </h3>
    </section> -->
   
    
</body>

</html>