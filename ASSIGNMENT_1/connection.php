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
    
//     $sql = "SELECT * FROM `Login` WHERE `username` = '$username' AND `password` = '$password' ";
//     $result = mysqli_query($conn, $sql);
//     $check = mysqli_fetch_array($result);
//     //print_r($check);
//     if (isset($check)) {
//         echo 'Login successful';
//     } else {
       
//         echo 'Please enter correct credentials';
//     }
// }
// ?>





