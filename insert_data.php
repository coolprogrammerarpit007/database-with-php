<?php

// data insert into table.
// echo "Data insert into Table";

$local_host = "localhost";
$user_name = "root";
$password = "";
$db_name = "myTestingDatabase";

// setting up connection to the database 
$conn = new mysqli($local_host,$user_name,$password,$db_name);

// checking if connection got sucessful.

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

// if sucessful, then connecting to database and inserting data to the table.

$sql = "INSERT INTO MyGuests(firstname,lastname,email)
VALUES('Novak','Djokovic','nole.24.out@gmail.com')";

// Checking if query is right and inserting data
if($conn->query($sql) === true){
    echo "Data Inserted into table sucessfully!";
}else{
    echo "Something got wrong!";
}