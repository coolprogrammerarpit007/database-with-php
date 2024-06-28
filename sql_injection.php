<?php

    // SQL Injection 
    // echo "Prventing The Inevitable!";

    $localhost = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "myTestingDatabase";

    // connecting to the server

    $conn = new mysqli($localhost,$user_name,$password,$db_name);

    if($conn->connect_error){
        die("Connection got failed!".$conn->connect_error);
    }


    // After sucessful connection to the database sql query will come here!

    // Prepare Template
    $stmt = $conn->prepare("INSERT INTO MyGuests(firstname,lastname,email) VALUES(?,?,?)");
    // bind parameters to the template.
    $stmt->bind_param('sss',$first_name,$last_name,$email);


    // set parameters and execute
    $first_name = 'Serena';
    $last_name = 'Williams';
    $email = 'serena.us.22.gmail.com';
    $stmt->execute();


    $first_name = 'Andy';
    $last_name = 'Murray';
    $email = "andy@gmail.com";
    $stmt->execute();

    $first_name = 'Stanilas';
    $last_name = 'Wawarinka';
    $email = 'stan.wawarinka@gmail.com';
    $stmt->execute();


    echo "New Records executed sucessfully!";
    $stmt->close();