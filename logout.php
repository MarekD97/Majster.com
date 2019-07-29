<?php
session_start();

unset($_SESSION['LOGGED']);
unset($_SESSION['LOGGED_USER']);

session_unset();

header('Location: index.php');
?>
