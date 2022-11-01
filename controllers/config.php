<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "car_rental";

$connection = mysqli_connect($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("The mysql connection was failed: " . $connection->connect_error);
}

$connection->query(
    "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(64) NOT NULL,
    email VARCHAR(128) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(64) NOT NULL,
    currentCar VARCHAR(64) NOT NULL,
    type VARCHAR(64) NOT NULL)"
);
$connection->query(
    "CREATE TABLE IF NOT EXISTS cars (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    model VARCHAR(64) NOT NULL,
    description TEXT NOT NULL,
    currentOwnerName VARCHAR(64) NOT NULL,
    costValue INT NOT NULL)"
);