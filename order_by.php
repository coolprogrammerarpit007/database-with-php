<?php

    // echo "Stating Order of data in Table";

    // setting up the connection to database

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $db_name = "myTestingDatabase";

    // setting up connection

    $conn = new mysqli($localhost,$username,$password,$db_name);

    if($conn->connect_error){
        die("Connection failed! ". $conn->connect_error);
    }

    // echo "Connection Happened sucessfully!";

    // query to order database by the ID

    $sql = "SELECT * FROM MyGuests ORDER BY id ASC";
    // storing query into result

    $result = $conn->query($sql);

    // storing resu;t into array

    $data = $result->fetch_all();
    var_dump($data);

    $conn->close();