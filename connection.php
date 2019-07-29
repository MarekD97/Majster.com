<?php

session_start();

if ((!isset($_POST['USER'])) || (!isset($_POST['PASSWORD']))) {
    header('Location: login.php');
    exit();
}

require_once "database_connection.php";
$connection = mysqli_connect($servername, $username, $password);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($connection, "SET CHARSET utf8");
mysqli_query($connection, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

mysqli_select_db($connection, $database);

$sql = "SELECT * FROM $table WHERE username=\"".$_POST['USER']."\" AND password=\"".md5($_POST['PASSWORD'])."\"";
$result = $connection->query($sql);

if ($result->num_rows == 1) {
    if (isset($_SESSION['PAGE_LOCATION']))
        $_SESSION['REDIRECT'] = $_SESSION['PAGE_LOCATION'];
    else
        $_SESSION['REDIRECT'] = "account.php";
    $_SESSION['LOGGED'] = true;
    $_SESSION['LOGGED_USER'] = $_POST['USER'];
    $_SESSION['PASSWORD'] = md5($_POST['PASSWORD']);
    $row = $result->fetch_assoc();
    $_SESSION['FIRSTNAME'] = $row['firstname'];
    $_SESSION['LASTNAME'] = $row['lastname'];
    $_SESSION['EMAIL'] = $row['email'];
    $_SESSION['TELEPHONE'] = $row['telephone'];
    header('Location: ' . $_SESSION['REDIRECT']);
} else {
    $_SESSION['REDIRECT'] = "index.php";
    $_SESSION['LOGGED'] = false;
    //unset($_SESSION['LOGGED']);
    // unset($_SESSION['LOGGED_USER']);
    session_unset();
    header('Location: login.php');
}
$connection->close();
