<?php
session_start();
require_once "database_connection.php";
$connection = mysqli_connect($servername, $username, $password);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($connection, "SET CHARSET utf8");
mysqli_query($connection, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

mysqli_select_db($connection, $database);
$accountTable = "account_" . strtolower($_SESSION["LOGGED_USER"]);

$sql = "DELETE FROM $accountTable WHERE $accountTable.`id` = ".$_POST["DELETE"]."";
if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: account.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>