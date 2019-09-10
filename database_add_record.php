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
$accountTable = "account_" . $_POST["SPECIALIST"];
echo $accountTable;
$sql = "INSERT INTO $accountTable (`firstname`, `lastname`, `email`, `telephone`, `content`) VALUES ('" . $_POST["FIRSTNAME"] . "', '" . $_POST["LASTNAME"] . "', '" . $_POST["EMAIL"] . "', '" . $_POST["TELEPHONE"] . "', '" . $_POST["CONTENT"] . "')";
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
    $_SESSION["ADD_RECORD"] = true;
    header('Location: add_order.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>