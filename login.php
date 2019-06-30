<?php
session_start();

if ((isset($_SESSION['LOGGED'])) && ($_SESSION['LOGGED'] == true)) {
    header('Location: account.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Majster.com - Strona logowania</title>
    <link rel="icon" href="images/logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="socialmedia.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Usługi budowlane</a>
                                <a class="dropdown-item" href="#">Usługi remontowe</a>
                                <a class="dropdown-item" href="#">Instalacje</a>
                                <a class="dropdown-item" href="#">Aranżacja wnętrz</a>
                                <a class="dropdown-item" href="#">Zewnętrzne, ogrodowe</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Formularz zgłoszeniowy</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Logowanie</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>

        <div class="container" id="content">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <h2>Rodzaje usług</h2>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Usługi budowlane</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Usługi remontowe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Instalacje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Aranżacja wnętrz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Zewnętrzne, ogrodowe</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <div class="input-form">
                        <h5>Wpisz poniżej swoje dane, aby się zalogować na konto.<h5>
                        <form name="loginForm" action="login.php" method="post">
                            <h5>Nazwa użytkownika</h5>
                            <input type="text" name="USER" />
                            <h5>Hasło</h5>
                            <input type="password" name="PASSWORD" />
                            <input type="submit" id="form_submit" value="Zaloguj się" /><br />
                        </form>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <h2>Fachowcy blisko ciebie</h2>
                    <ul>
                        <li>Białystok</li>
                        <li>Bydgoszcz</li>
                        <li>Gdańsk</li>
                        <li>Gdańsk</li>
                        <li>Gorzów Wielkopolski</li>
                        <li>Katowice</li>
                        <li>Kielce</li>
                        <li>Kraków</li>
                        <li>Lublin</li>
                        <li>Łódź</li>
                        <li>Olsztyn</li>
                        <li>Opole</li>
                        <li>Poznań</li>
                        <li>Rzeszów</li>
                        <li>Szczecin</li>
                        <li>Toruń</li>
                        <li>Warszawa</li>
                        <li>Wrocław</li>
                        <li>Zielona Góra</li>
                    </ul>
                </div>

            </div>
        </div>

        <footer class="footer">
            <p>Serwis Majster.com to dobre miejsce na znalezienie dobrego fachowca, który wyremontuje Ci
                mieszkanie lub dom. Obiektywny ranking fachowców, opinie - to wszystko pomoże w wyborze najlepszego
                w okolicy.
            </p>
            <p>Zajrzyj na nasz profil na Facebooku, Instagramie i Twitterze.
            </p>
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <a class="social-media-button" href="http://www.facebook.com">
                        <div class="facebook">Facebook</div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="social-media-button" href="http://www.instagram.com">
                        <div class="instagram">Instagram</div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="social-media-button" href="http://www.twitter.com">
                        <div class="twitter">Twitter</div>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>