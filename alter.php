<?php

    // echo "Adding a column to existing table";

    // Setting up the connection

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db_name = "myTestingDatabase";


    $conn = new mysqli($localhost,$username,$password,$db_name);

    if($conn->connect_error){
        die("connection failed to database!");
    }

    // echo "Database Connection Sucessful!";


    // setting up query to add a column of active id or not

    $sql = "ALTER TABLE MyGuests DROP COLUMN activate_id";
    if($conn->query($sql) === true){
        echo "Column Added to the table sucessfully!" ;
    }
    else{
        "column not added to the table!";
    }

    $conn->close();