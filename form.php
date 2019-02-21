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
 $_SESSION['totalcost'] = "";
 
 
 ?>

 <?php 
//  calling the object userReservation to start the methods within the class
        $userReservation = new userReservation();
        // function that grabs the information upon submit and enters it into the database
        $userReservation->saveUserData($db_server);
        $userReservation->userBookingDetails($db_server);
   
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
                        <a href="#" class="navbar-item">Gallery</a>
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
                    <option value="The Silo">The Silo - R980 pp</option>
                    <option value="The Radisson Red">The Radisson Red - R750 pp</option>
                    <option value="The Westin" >The Westin R800 pp</option>
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
    </section> -->


</body>

</html>
