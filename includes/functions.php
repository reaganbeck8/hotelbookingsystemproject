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

        public  $totaldays;
        public  $totalCost;

        public function saveUserData($db_server){
        // function that grabs the information upon submit and enters it into the database

            if(isset($_POST['insert_data'])) {
        
                $name =  $_POST['name'];
                $surname =  $_POST['surname'];
                $hotelname = $_POST['hotelname'];
                $arrival =  $_POST['arrival'];
                $departure = $_POST['departure'];
                $price = "";

                
        // equating the session variables to the post variable for later re-use on the 'reservation.php' page
                $_SESSION['name'] = $name;
                $_SESSION['surname'] = $surname;
                $_SESSION['hotelname'] = $hotelname;
                $_SESSION['arrival'] = $arrival;
                $_SESSION['departure'] = $departure;
   
        
 
        // selecting the database through the connection '$db_server'
        mysqli_select_db($db_server, 'test_db');

        // Building a string which will act as our query when inserted into the query function of PHP
        $sql = "INSERT INTO users (name,surname) VALUES ('$name', '$surname')";

            
            if ($db_server->query($sql)) {
              header("location: reservation.php"); //user gets redirected to the reservation page where their reservation can be displayed
            } else {
                echo "Error: " . "<br>" . $sql . "<br>" . $db_server->error; //user will get an error if the booking cannot be saved.
            }
    }

    }

    public function userBookingDetails($db_server){

        if(isset($_POST['insert_data'])){

            $name =  $_POST['name'];
                $surname =  $_POST['surname'];
                $hotelname = $_POST['hotelname'];
                $arrival =  $_POST['arrival'];
                $departure = $_POST['departure'];
                $price = "";
               
                //finding absolute value from date of booking for price purposes
                
                $datetime1 = new DateTime($_POST['arrival']);
                $datetime2 = new DateTime($_POST['departure']);
                $_SESSION['days'] = $datetime1->diff($datetime2);
                $totaldays = $_SESSION['days']->format('%a');
                
        // equating the session variables to the post variable for later re-use on the 'reservation.php' page
                $_SESSION['name'] = $name;
                $_SESSION['surname'] = $surname;
                $_SESSION['hotelname'] = $hotelname;
                $_SESSION['arrival'] = $arrival;
                $_SESSION['departure'] = $departure;
        //switch statement for the hotel dropdown
            switch ($hotelname) {

                case($hotelname == "The Silo"): 
                $price = 980;
                break;
                case($hotelname == "The Radisson Red"): 
                $price = 750;
                break;
                case($hotelname == "The Westin"): 
                $price = 800;
                break;

            }
            //calculating the total cost of what the user will have to pay to the hotel

            $totalCost = $price*$totaldays;

            $_SESSION['totalcost'] = $totalCost;
            
            //creating the query that will be insert

            $sql1 = "INSERT INTO hotels (name,hotelname,price,arrival,departure) VALUES ('$name','$hotelname','$totalCost','$arrival','$departure')";

            // selecting the database through the connection '$db_server'
     
            mysqli_select_db($db_server, 'test_db');

            if ($db_server->query($sql1)) {
                header("location: reservation.php"); //user gets redirected to the reservation page where their reservation can be displayed
              } else {
                  echo "error";
              }
        }

    }
}

?>