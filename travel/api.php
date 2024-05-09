<?php
    include ("dbconnect.php");

    $result = $mysqli->query("SELECT * FROM tours");
    $tours = [];

    while($myrow = $result->fetch_assoc()) {
        $tours[] = $myrow;
    }

    header('Content-type: application/json');
    echo json_encode($tours);
?>