<?php

// Selecting data from a database.
// echo "Showing data from the table in database to page!";

$localhost = "localhost";
$username = "root";
$password = "";
$db_name = "myTestingDatabase";

// setting up connection to the database!

$conn = new mysqli($localhost, $username, $password, $db_name);

// error handling if connection to the database is broken

if ($conn->connect_errno) {
    die("Connection to the database failed!" . $conn->connect_error);
}

// sql query to fetch data from the table and show it on page!

$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql); // store the query result
if ($result->num_rows > 0) {
    // output row of each data
    $data = $result->fetch_all(); // converts result into associative array/object
    // var_dump($data[0][1]);
    for($row=0; $row<count($data);$row++){
        for($col=0; $col<count($data[$row]);$col++){
            echo $data[$row][$col] . " ";
        }
        echo "<br>";
    }

    
} else {
    echo "Not any data got fetched!";
}

$conn->close();
