
 <?php include_once 'includes/conn.php' ?>

 <?php 



    // if(isset($_POST['insert_data'])) {

    //     $name = $_POST['name'];
    //     $surname = $_POST['surname'];
    //     $hotelname = $_POST['hotelname'];
    //     $arrival = $_POST['arrival'];
    //     $departure = $_POST['departure'];

    //     mysqli_select_db($db_server, 'test_db');

    //     $sql = "INSERT INTO users (name,surname,hotelname,arrival,departure) VALUES ('$name', '$surname', '$hotelname', '$arrival', '$departure')";

    //         if ($db_server->query($sql)) {

    //         } else {
    //             echo "Error: " . "<br>" . $sql . "<br>" . $db_server->error;
    //         }
        
    // }


      
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
</head>
<body>
<nav class="navbar is-success" id="navigation">
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
                        <a href="#" class="navbar-item">Contact</a>
                        <a href="#" class="navbar-item">Portfolio</a>
                        <a href="#about" class="navbar-item">About</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero containing the greeting text  -->
    <section class="hero is-fullheight">
        <article class="container">
            <div class="columns" id="landing">
                <caption class="column is-half" id="landing-greeting" width="10em" height="10em">
                    <h2 class="title" style="color: #edf2f4 !important;">Ever thought of <span style="color: #8d99ae !important;">Escaping</span> the city?</h2>
                    <button class="button is-rounded">Book Now!</button>
                </caption>
                <figure class="column is-half">
                    <span id="landing-image"></span>
                </figure>
            </div>
        </article>
    </section>
    
    <section class="container">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <h1>name</h1>
                <input class="button is-rounded" type="text" name="name" placeholder="name" required>
            <h1>surname</h1>
                <input class="button is-rounded" type="text" name="surname" placeholder="surname" required> 
            <h1>hotel</h1>
                <select class="button is-rounded" name="hotelname" required>
                    <option></option>
                    <option value="The Silo">the silo</option>
                    <option value="The Radisson Red">the radisson red</option>
                    <option value="The Westin">the westin</option>
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
        ?></h3>
    </section> -->
    
</body>

</html>