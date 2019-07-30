<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pl">

<head>
    <title>Majster.com - Strona główna</title>
    <link rel="icon" href="images/logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="parallax.css">
    <link rel="stylesheet" type="text/css" href="socialmedia.css">
    <link href="https://fonts.googleapis.com/css?family=Chivo&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .main-section {
            background-image: url("images/background_wall.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .container div {
            background: url("images/concrete_wall.png");
            border: 4px solid #7e7272;
            border-radius: 4px;
            padding: 25px;
            margin: 25vh auto;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="main-section">
        <header class="header">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="index.php">
                    <img src="/images/logo.svg" width="100%" height="100%" />
                    Majster.com
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <div class="icon-arrow" onclick="func(this)">
                        <script>
                            function func(x) {
                                x.classList.toggle("change");
                            }
                        </script>
                        <div class="arrow-down">
                            <i class='fas fa-angle-down' style='font-size:36px;color:white'></i>
                        </div>
                        <div class="arrow-up">
                            <i class='fas fa-angle-up' style='font-size:36px;color:white'></i>
                        </div>
                    </div>
                </button>
                <div class="collapse navbar-collapse ml-auto justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Usługi
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="service_building.php">Usługi budowlane</a>
                                <a class="dropdown-item" href="service_renovation.php">Usługi remontowe</a>
                                <a class="dropdown-item" href="service_installation.php">Instalacje</a>
                                <a class="dropdown-item" href="service_indoors.php">Aranżacja wnętrz</a>
                                <a class="dropdown-item" href="service_outdoors.php">Zewnętrzne, ogrodowe</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Formularz zgłoszeniowy</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"></a>
                        </li>
                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['LOGGED'])) {
                                echo '<a class="nav-link" href="account.php">Profil</a>';
                            } else {
                                echo '<a class="nav-link" href="index.php#application_form">Załóż konto</a>';
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                            if (!isset($_SESSION['LOGGED'])) {
                                echo '<a class="nav-link" href="account.php">Logowanie</a>';
                            } else {
                                echo '<a class="nav-link" href="logout.php">Wyloguj</a>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <div class="container" id="content">
            <div>
                <h2>Autor strony: Marek Dorosz</h2>
                <h5>Politechnika Poznańska, Automatyka i Robotyka, wydział Informatyki</h5>
                <p>Nr indeksu: 132048</p>
                <p>Grupa dziekańska: A1</p>
                <p>E-mail: mdorosz2@wp.pl</p>
                <p>Projekt zaliczeniowy z przedmiotu Aplikacje internetowe</p>
                <p>Github: <a class="menu-link" href="https://github.com/MarekD97">https://github.com/MarekD97</a></p>
                <img src="images/putpoznan.svg" width="100%" height="100%" alt="Politechnika Poznańska" />
            </div>
        </div>

        <footer class="footer">
            <div class="row no-gutters">
                <div class="col-sm-12">
                    <p>Serwis Majster.com to dobre miejsce na znalezienie dobrego fachowca, który wyremontuje Ci
                        mieszkanie lub dom. Obiektywny ranking fachowców, opinie - to wszystko pomoże Ci w wyborze najlepszego
                        w okolicy.</p>
                </div>
            </div>
            <div class="row no-gutters justify-content-sm-center">
                <div class="col-sm-9 col-md-6 col-xl-3">
                    <a class="social-media-button" href="http://www.facebook.com">
                        <div class="facebook"><i class="fa fa-facebook"></i></div>
                    </a>
                    <a class="social-media-button" href="http://www.instagram.com">
                        <div class="instagram"><i class="fa fa-instagram"></i></div>
                    </a>
                    <a class="social-media-button" href="http://www.twitter.com">
                        <div class="twitter"><i class="fa fa-twitter"></i></div>
                    </a>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-12">
                    <p>Zajrzyj na nasze profile na Facebooku, Instagramie i Twitterze.</p>
                    <p>Majster.com © 2019 Designed by Marek Dorosz, mdorosz2@wp.pl</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>