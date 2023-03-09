<?php
$hostname = "localhost";
$username = "admin";
$password = "admin";
$dbname = "myDB";
$tablename = "Post";
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["id"];
$delete_sql = "DELETE FROM `Post` WHERE id='$id'";
$conn->query($delete_sql);

$db = $conn;
$columns = ['id', 'PostTitle', 'PostDescription'];
$fetchData = fetch_data($db, $tablename, $columns);
function fetch_data($db, $tablename, $columns)
{
    $columnName = implode(", ", $columns);
    $query = "SELECT " . $columnName . " FROM $tablename" . " ORDER BY id";
    $result = $db->query($query);
    if ($result == true) {
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $msg = $row;
        } else {
            $msg = "No Data Found";
        }
    } else {
        $msg = mysqli_error($db);
    }

    return $msg;
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .col{
        margin: 4% 0% 0% 0%;
        font-size: 22px;
    }
    </style>
</head>


<body>

    <div class="col">
    <h1>Delete Table Records</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Post Title</th>
                    <th>Post Description</th>
            </thead>
            <tbody>
                <?php
                if (is_array($fetchData)) {
                    foreach ($fetchData as $data) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $data['id']; ?>
                            </td>
                            <td>
                                <?php echo $data['PostTitle'] ?? ''; ?>
                            </td>
                            <td>
                                <?php echo $data['PostDescription'] ?? ''; ?>
                            </td>
                        </tr>
                        <?php

                    }
                } ?>
            </tbody>
        </table>
        <a href="home.html">Back To Home</a>
    </div>

</body>

</html>