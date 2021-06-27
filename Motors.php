<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "sm_iot";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$range1 = $_POST['eng1'];
$range2 = $_POST['eng2'];
$range3 = $_POST['eng3'];
$range4 = $_POST['eng4'];
$range5 = $_POST['eng5'];
$range6 = $_POST['eng6'];

if (isset($_POST["save"])) {

    $sql = "INSERT INTO Motors ( Engine1, Engine2, Engine3, Engine4, Engine5, Engine6) 
        VALUES ('" . $range1 . "', '" . $range2 . "', '" . $range3 . "', '" . $range4 . "', '" . $range5 . "', '" . $range6 . "')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else if (isset($_POST["switch"])) {

    $sql = "UPDATE `motors` SET  `Switch` = '1' WHERE `motors`.`ID` = ( SELECT MAX(`ID`) FROM motors ) ;";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
header("location:" . $_SERVER['HTTP_REFERER']);
