<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "sm_iot";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

if(isset($_POST["direction"])) {
    $direction = $_POST["direction"];
    $sql = "INSERT INTO Directions (direction) VALUES ('" . $direction . "')";

    if ($conn->query($sql) === TRUE) {
        echo $direction;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

header("location:" . $_SERVER['HTTP_REFERER']);
