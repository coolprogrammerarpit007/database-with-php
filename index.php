<?php

//  echo "Database Connection with the PHP";

$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "myTestingDatabase";

//  $connection = new mysqli($server_name,$username,$password);
$connection = new mysqli($server_name, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Conection Failed!: " . $connection->connect_error);
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

// Creating Database
// $sql = "CREATE DATABASE myTestingDatabase";
if ($connection->query($sql) === true) {
    echo "My Table created sucessfully!";
} else {
    echo "Error, while creating the Table!";
}
