<?php
$time_zone = 'Asia/Kolkata';

$con = mysqli_connect("localhost", "root", "", "todolist");

if (!$con) {
    echo "Error connecting to MySQL <br>";
    exit;
}