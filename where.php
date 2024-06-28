<?php

    // Select and filter data from the table.

    //  connecting to the database.

    $localserver = "localhost";
    $username = "root";
    $password = "";
    $db_name = "myTestingDatabase";

    $conn = new mysqli($localserver,$username,$password,$db_name);

    if($conn->connect_error){
        die("Connection Failed, ". $conn->error);
    }

    // echo "Connection Happened Sucessfully!";

    // sql query to fetch data of novak djokovic
    $sql = "SELECT firstname,lastname,email FROM MyGuests WHERE id = 3";

    // storing query into result
    $result = $conn->query($sql);

    // storing the result into an array

    $row = $result->fetch_assoc();
    // var_dump($row);
    // var_dump($row);

    echo "Name: {$row["firstname"]} {$row["lastname"]} and Email Id is: {$row["email"]}";

    


    $conn->close();