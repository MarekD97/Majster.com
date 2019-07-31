<?php
require_once "database_connection.php";
session_start();
$connection = mysqli_connect($servername, $username, $password);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($connection, "SET CHARSET utf8");
mysqli_query($connection, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

mysqli_select_db($connection, $database);

$username = addslashes($_POST["USERNAME"]);
$password = addslashes($_POST["PASSWORD"]);
$passwordRepeat = addslashes($_POST["PASSWORD_REPEAT"]);
$firstname = addslashes($_POST["FIRSTNAME"]);
$lastname = addslashes($_POST["LASTNAME"]);
$email = addslashes($_POST["EMAIL"]);
$telephone = addslashes($_POST["TELEPHONE"]);

$sql = "SELECT * FROM $table WHERE username=\"" . $username . "\"";
$result = $connection->query($sql);

$_SESSION["USER_FAIL"] = false;
$_SESSION["PASS_FAIL"] = false;

if ($result->num_rows > 0) {
    $_SESSION["USER_FAIL"] = true;
    header('Location: index.php#application_form');
} 

if ($password != $passwordRepeat) {
    $_SESSION["PASS_FAIL"] = true;
    header('Location: index.php#application_form');
}

if (!$_SESSION["USER_FAIL"] && !$_SESSION["PASS_FAIL"]) {
    $sql = "INSERT INTO $table (`username`, `password`, `firstname`, `lastname`, `email`, `telephone`) VALUES (\"" . $username . "\", \"" . md5($password) . "\", \"" . $firstname . "\", \"" . $lastname . "\", \"" . $email . "\", \"" . $telephone . "\")";
    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
        $sql = "CREATE TABLE `data_base`.`account_$username` ( `id` INT NOT NULL AUTO_INCREMENT , `firstname` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `lastname` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `email` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `telephone` TEXT CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL , `content` TEXT CHARACTER SET utf32 COLLATE utf32_polish_ci NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        $connection->query($sql);
        header('Location: login.php');
        session_unset();
    } else {
       echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

$connection->close();
