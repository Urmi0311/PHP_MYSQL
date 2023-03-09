<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "myDB";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "CREATE TABLE  login (

//     username VARCHAR(30) NOT NULL,
//     password VARCHAR(30) NOT NULL

//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table Post created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }

  $sql = "INSERT INTO login (username, password)
    VALUES ('urmi', 'urmi')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();

?>
