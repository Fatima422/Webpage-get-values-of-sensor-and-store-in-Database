<?php

$host = "localhost";

$username = "root";

$password = "";

$conn = new PDO("mysql:host=$host;dbname=Sensor_values", $username, $password);

if(isset($_GET['save']))

{

 //print ($_GET);

 $sql = "INSERT INTO Sensor_values(SensorValues) VALUES('".addslashes($_GET['SensorValues'])."')";

 $conn->query($sql);

}

?>

<html>

    <body>

        <form  action="" method="GET">

        <input type="number" name="SensorValues">

        <input type="submit" name="save" value="Send">

        </form>




    </body>

</html>