<?php 
include_once 'conn.php';
// CREATE TABLE IF NOT EXISTS `users` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `name` varchar(45) NOT NULL,
//     `surname` varchar(45) NOT NULL,
//     `hotelname` varchar(45) NOT NULL,
//     `arrival` varchar(45) NOT NULL,
//     `departure` varchar(45) NOT NULL,
//     PRIMARY KEY (`id`)
//   ) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
$userReservation = new userReservation();

    class userReservation {

        var $duration;

        public function saveUserData($db_server){
        // function that grabs the information upon submit and enters it into the database

    if(isset($_POST['insert_data'])) {
        
        $name =  $_POST['name'];
        $surname =  $_POST['surname'];
        $hotelname = $_POST['hotelname'];
        $arrival =  $_POST['arrival'];
        $departure = $_POST['departure'];

        // equating the session variables to the post variable for later re-use on the 'reservation.php' page
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['hotelname'] = $hotelname;
        $_SESSION['arrival'] = $arrival;
        $_SESSION['departure'] = $departure;
   
        
 
        // selecting the database through the connection '$db_server'
        mysqli_select_db($db_server, 'test_db');

        // Building a string which will act as our query when inserted into the query function of PHP
        $sql = "INSERT INTO users (name,surname,hotelname,arrival,departure) VALUES ('$name', '$surname', '$hotelname', '$arrival', '$departure')";

            
            if ($db_server->query($sql)) {
              header("location: reservation.php"); //user gets redirected to the reservation page where their reservation can be displayed
            } else {
                echo "Error: " . "<br>" . $sql . "<br>" . $db_server->error; //user will get an error if the booking cannot be saved.
            }
    }

    }

}

?>