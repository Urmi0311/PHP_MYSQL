<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//CREATE THE DATABASE
$sql = "CREATE DATABASE if not exists myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->select_db($dbname);
// $createtable = CREATE TABLE `login` ( `username` VARCHAR(30) NOT NULL , `password` VARCHAR(40) NOT NULL ) ;
$createtable = "CREATE TABLE IF NOT EXISTS  login( `username` VARCHAR(30), `password` VARCHAR(50))";
if (mysqli_query($conn, $createtable)) {
    echo "<p>table created sucessfully</p>";
} else {
    echo "<p>Error creating table: " . mysqli_error($conn) . "</p>";
}
//Insert data into the table
$inserttable = "INSERT INTO `login`(`username`,`password`) VALUES ('admin','admin')";
if (mysqli_query($conn, $inserttable)) {
    echo "<p>Data inserted into table</p>";
} else {
    echo "<p>Error inserting data: " . mysqli_error($conn) . "</p>";
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM `login`";
$result = mysqli_query($conn, $sql);

  
    $pass = false;
    $user = False;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["username"] == $username) {
                $user = true;
                if ($row["password"] == $password) {
                    $pass = true;

                    break;
                }
            }
        }
    }
    if ($user) {
        if ($pass) {
            header("Location: home.html");
        } else {
            echo "<p>Invalid Password</p> ";
        }
    } else {
        echo "<p>Invalid Username</p> ";
    }
    

// ?>





