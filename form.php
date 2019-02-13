
 <?php include_once 'includes/conn.php' ?>

 <?php 



    if(isset($_POST['insert_data'])) {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $hotelname = $_POST['hotelname'];
        $arrival = $_POST['arrival'];
        $departure = $_POST['departure'];

        mysqli_select_db($db_server, 'test_db');

        $sql = "INSERT INTO users (name,surname,hotelname,arrival,departure) VALUES ('$name', '$surname', '$hotelname', '$arrival', '$departure')";

            if ($db_server->query($sql)) {

            } else {
                echo "Error: " . "<br>" . $sql . "<br>" . $db_server->error;
            }
        
    }


      
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
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
        <h1>name</h1>
            <input type="text" name="name" placeholder="name" required>
        <h1>surname</h1>
            <input type="text" name="surname" placeholder="surname" required> 
        <h1>hotel</h1>
            <select name="hotelname" required>
                <option></option>
                <option value="The Silo">the silo</option>
                <option value="The Radisson Red">the radisson red</option>
                <option value="The Westin">the westin</option>
            </select>
        <h1>check-in</h1>
            <input type="date" name="arrival" required>
        <h1>check-out</h1>
            <input type="date" name="departure" required>
            <br>
                <br>
        <input type="submit" name="insert_data" required> 
    </form>

    <section class="new-entry">
        <h1>Reservation details:</h1>
        <h3><?php 
                include_once 'conn.php';
                //selecting all info
                $details = "SELECT * FROM users ORDER BY 'id' DESC"; 
                $resdetails = $db_server->query($details);

                while($row = $resdetails->fetch_assoc()){
                    echo "<br>" . $row['name']. $row['surname'] . $row['hotelname'] .  "  " . "has booked";
                }
        ?></h3>
    </section>
    
</body>

</html>