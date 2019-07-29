<?php

session_start();

if ((!isset($_POST['USER'])) || (!isset($_POST['PASSWORD']))) {
    header('Location: login.php');
    exit();
}

if (($_POST['USER'] == $_POST['PASSWORD']) && isset($_POST['PASSWORD']) && ($_POST['PASSWORD'] <> '')) {
    if(isset($_SESSION['PAGE_LOCATION']))
        $_SESSION['REDIRECT'] = $_SESSION['PAGE_LOCATION'];
    else
        $_SESSION['REDIRECT'] = "account.php";
    $_SESSION['LOGGED'] = true;
    $_SESSION['LOGGED_USER'] = $_POST['USER'];
    $_SESSION['PASSWORD'] = md5($_POST['PASSWORD']);
} else {
    $_SESSION['REDIRECT'] = "index.php";
    $_SESSION['LOGGED'] = false;
    $_SESSION['LOGGED_USER'] = $_POST['USER'];
    $_SESSION['PASSWORD'] = md5($_POST['PASSWORD']);
    //unset($_SESSION['LOGGED']);
   // unset($_SESSION['LOGGED_USER']);
}
header('Location: '.$_SESSION['REDIRECT']);
