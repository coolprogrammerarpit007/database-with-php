<?php 

//  echo "Update data to record!";

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "myTestingDatabase";

$conn = new mysqli($localhost,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed!"."<br>");
}

// echo "Connection Got Succesful to the database";
// Query to update data from the database.

$sql = "UPDATE MyGuests SET firstname = 'Andy', lastname = 'Roddik' WHERE id = 16";

if($conn->query($sql)){
    echo "Data got updated sucessfully!";
}
else{
    echo "Updation Operation got failed!";
}