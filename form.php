
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
                    <h2 class="title" style="color: #edf2f4 !important;">Ever thought of <span style="color: #8d99ae !important;">Escaping</span> the city?<br/>
                    <span class="subtitle has-text-white">Make a <span style="color: #8d99ae !important;">Reservation</span> now.</span>
                    <br/>
                    <br/>
                    <button class="button is-rounded">Book Now!</button>
                </h2>
                    
                    
                </caption>
                <figure class="column is-half">
                    <span id="landing-image"><img src="images/heroimage.png" alt="city-skyline" width="322.5px" height="450px"></span>
                </figure>
            </div>
        </article>
    </section>
    <section class="container">
    <div class="container">
        <div class="title has-text-centered">
          <h1 class="title has-text-white">Let's go on a <span style="color: #8d99ae !important;">Journey</span></h1>
        </div>
        <section class="hero is-fullheight">
        <div class="container">
        <div class="columns">
          <div class="column is-one-third">
            <div class="card">
              <div class="card-image">
                <figure class="image">
                  <img src="images/silo-royal-suite.jpg" alt="silo-hotel-royal-suites-angled-view">
                </figure>
              </div>
              <div class="card-content has-text-centered">
                <div class="media has-text-centered">
                  <div class="media-content has-text-centered">
                    <p class="title is-4">The Silo</p>
                    <p class="subtitle is-6">Built upon a former grain silo</p>
                  </div>
                </div>

                <div class="content">
                  If you're ever looking for a towering giant, then this would be the perfect encounter for you.
                  <br>
                  <a href="#">#toweringsilo</a> <a href="#">#supremesilo</a>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-one-third">
            <div class="card">
              <div class="card-image">
                <figure class="image">
                  <img src="images/radisson-front.jpg" alt="radisson-red-front-view">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-content has-text-centered">
                    <p class="title is-4">The Radisson Red</p>
                    <p class="subtitle is-6"></p>
                  </div>
                </div>

                <div class="content has-text-centered">
                  An incredibly amazing experience for those who enjoy viewing dashes of vibrant red and white as they
                  cut
                  around each and every edge of the hotel.
                  <a href="#">#radissonred</a> <a href="#">#radissonpassion</a>
                  <br>

                </div>
              </div>
            </div>
          </div>
          <div class="column is-one-third">
            <div class="card">
              <div class="card-image">
                <figure class="image ">
                  <img src="images/westin-side-view.jpg" alt="westin-hotel-angled-view">
                </figure>
              </div>
              <div class="card-content">

                <div class="media-content has-text-centered" id="westin">
                  <p class="title is-4">The Westin</p>
                  <p class="subtitle is-6">Overlooking the docks and the mount</p>
                </div>
              </div>

              <div class="content has-text-centered" id="westin">
                Situated next to the Cape Town International Convention Center (CTICC), a tall shard of glass with a
                waterway that grants you access to the Victoria & Alfred Waterfront (V&A Waterfront) <a
                  href="#">#WestinFeel</a> <a href="#">#WhileWestern</a>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>
    <section class="container">
        <article class="columns">
            <div class="column">
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
            </div>
            <div class="column">
                <figure class="bg">
                    <span class="hotels"><img src="images/silo-royal-suite.jpg" alt=""></span>
                </figure>
            </div>
        </article>
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