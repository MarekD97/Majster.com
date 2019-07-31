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

$sql = "DROP TABLE `account_".$_SESSION["LOGGED_USER"]."`";
$connection->query($sql);

$sql = "DELETE FROM `".$table."` WHERE `".$table."`.`username` = \"".$_SESSION["LOGGED_USER"]."\"";
echo $sql;
$connection->query($sql);

echo "Deleted account successfully";
session_destroy();
header('Location: index.php');
?>