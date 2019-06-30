<?php

session_start();

if ((!isset($_POST['USER'])) || (!isset($_POST['PASSWORD']))) {
    header('Location: login.php');
    exit();
}

if (($_POST['USER'] == $_POST['PASSWORD']) && isset($_POST['PASSWORD']) && ($_POST['PASSWORD'] <> '')) {
    $_SESSION['REDIRECT'] = "account.php";
    $_SESSION['LOGGED'] = true;
    $_SESSION['LOGGED_USER'] = $_POST['USER'];
    $_SESSION['PASSWORD'] = $_POST['PASSWORD'];
} else {
    $_SESSION['REDIRECT'] = "login.php";
    $_SESSION['LOGGED'] = false;
    $_SESSION['LOGGED_USER'] = $_POST['USER'];
    $_SESSION['PASSWORD'] = $_POST['PASSWORD'];
    //unset($_SESSION['LOGGED']);
   // unset($_SESSION['LOGGED_USER']);
}
header('Location: account.php');
