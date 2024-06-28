<?php

    // Multiple Data values inserted into a table.
    
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myTestingDatabase";

    // setting up the connection

    $conn = new mysqli($localhost,$username,$password,$dbname);

    // checking connection

    if($conn->connect_error){
        die("Connection Failed! ".$conn->connect_error);
    }

    // if connection got sucessful then insert multiple data to the table

    // writing sql query to enter multiple data into the table
    $sql = "INSERT INTO MyGuests(firstname,lastname,email)
    VALUES('Dominic','Thiem','dominic.out@gmail.com'),
    ('Carlos','Alcaraz','carlos@gmail.com'),
    ('Jannik','Sinner','jannik.in.out@gmail.com')";


// if sql query is correct then inserting all these data into 
if($conn->multi_query($sql) === true){
    echo "Data added to the table sucessfully!";
}
else{
    echo "Query is unmatched, refer back to your query back!";
}


// Stopping the connection
$conn->close();