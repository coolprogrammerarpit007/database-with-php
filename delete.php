<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db_name = "myTestingDatabase";


    $conn = new mysqli($localhost,$username,$password,$db_name);

    if($conn->connect_error){
        die("Connection to the database got failed!". "<br>");
    }

    // writing query to delete a record from database.

    $sql = "DELETE FROM MyGuests WHERE id = 6";
    if($conn->query($sql)){
        echo "Record deleted sucessfully from the database!";
    }
    else{
        echo "NOT Succesful delete operation!";
    }

    $conn->close();