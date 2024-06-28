<?php

    // setting up the connection

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myTestingDatabase";


    $conn = new mysqli($localhost,$username,$password,$dbname);

    if($conn->error){
        die("Connection Got Failed!" . $conn->error);
    }

    // Query to fetch data updto 5 rows

    $sql = "SELECT id,firstname,lastname,email FROM MyGuests ORDER BY id LIMIT 5";
    $result = $conn->query($sql);
    $data = $result->fetch_all();
    var_dump($data);


    $conn->close();

