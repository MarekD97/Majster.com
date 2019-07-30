<?php
require_once "database_connection.php";
$connection = mysqli_connect($servername, $username, $password);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($connection, "SET CHARSET utf8");
mysqli_query($connection, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

mysqli_select_db($connection, $database);

$sql = "INSERT INTO $table (`username`, `password`, `firstname`, `lastname`, `email`, `telephone`) VALUES ('" . $_POST["USERNAME"] . "', '" . md5($_POST["PASSWORD"]) . "', '" . $_POST["FIRSTNAME"] . "', '" . $_POST["LASTNAME"] . "', '" . $_POST["EMAIL"] . "', '" . $_POST["TELEPHONE"] . "')";
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: login.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>