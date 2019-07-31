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

$sql = "UPDATE $accountTable SET  `firstname` = '" .$_POST["FIRSTNAME"]. "', `lastname` = '". $_POST["LASTNAME"] . "', `email` = '" . $_POST["EMAIL"] . "', `telephone` = '" . $_POST["TELEPHONE"] . "', `content` = '" . $_POST["CONTENT"] . "' WHERE $tableAccount `id` = ".$_POST["EDIT"]."";
if ($connection->query($sql) === TRUE) {
    echo "Record edited successfully";
    header('Location: account.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>