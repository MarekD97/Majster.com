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
                                <a class="dropdown-item" href="add_order.php">Formularz zgłoszeniowy</a>
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
                                echo '<a class="nav-link" href="#application_form">Załóż konto</a>';
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
        <section class="section-panel-fullscreen">
            <div class="parallax background-tools">
                <div class="parallax-title">
                    Potrzebujesz fachowca? Pomożemy znaleźć najlepszego w mieście!
                    <div class="scroll-arrow">
                        <a href="#content">
                            <i class='fas fa-angle-double-down'></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container" id="content">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <h2>Rodzaje usług</h2>
                    <ul>
                        <li><a class="menu-link" href="service_building.php">Usługi budowlane</a></li>
                        <li><a class="menu-link" href="service_renovation.php">Usługi remontowe</a></li>
                        <li><a class="menu-link" href="service_installation.php">Instalacje</a></li>
                        <li><a class="menu-link" href="service_indoors.php">Aranżacja wnętrz</a></li>
                        <li><a class="menu-link" href="service_outdoors.php">Zewnętrzne, ogrodowe</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h2>Znajdź najlepszego fachowca w twojej okolicy!</h2>
                    <h5>Wystarczy, że:</h5>
                    <ol>
                        <li>Napiszesz jakiej usługi potrzebujesz</li>
                        <li>Przejrzysz zgłoszenia</li>
                        <li>Wybierzesz najlepszego</li>
                    </ol>
                </div>
                <div class="d-none d-sm-block col-sm-2">
                    <h2>Zagraj w grę interaktywną!</h2>
                    <div class="icon-game">
                        <a href="game.php">
                            <i class="fas fa-gamepad"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <h2>Fachowcy blisko ciebie</h2>
                    <ul>
                        <li>Warszawa</li>
                        <li>Kraków</li>
                        <li>Łódź</li>
                        <li>Wrocław</li>
                        <li>Poznań</li>
                        <li>Gdańsk</li>
                        <li>Szczecin</li>
                        <li>Bydgoszcz</li>
                        <li>Lublin</li>
                        <li>Katowice</li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <div class="input-form">
                        <h2>Poszukujesz fachowca?</h2>
                        <h5>Napisz poniżej czego potrzebujesz...</h5>
                        <form action="add_order.php" method="post">
                            <input class="input-text" type="text" name="SEARCH" placeholder="np. gipsowanie ścian, montaż okien..." />
                            <input type="submit" value="Dalej" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-panel-fullscreen">
            <div class="parallax background-wall parallax-half">
                <div class="parallax-title">
                    Jesteś fahowcem i szukasz zleceń? Dołącz i otrzymuj zlecenia z całej Polski.
                </div>
            </div>
        </section>
        <div class="container" id="content2">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <h2>Zlecenia blisko ciebie</h2>
                    <ul>
                        <li>Warszawa</li>
                        <li>Kraków</li>
                        <li>Łódź</li>
                        <li>Wrocław</li>
                        <li>Poznań</li>
                        <li>Gdańsk</li>
                        <li>Szczecin</li>
                        <li>Bydgoszcz</li>
                        <li>Lublin</li>
                        <li>Katowice</li>
                    </ul>
                </div>
                <div class="col-sm-8" id="application_form">
                    <div class="input-form">
                        <h2>Prowadzisz firmę remontową i poszukujesz zleceń?</h2>
                        <h5>Jeśli nie posiadasz konta w naszym serwisie, załóż je teraz!</h5>
                        <form action="database_new_account.php" method="post">
                            Nazwa użytkownika<br />
                            <input class="input-text" type="text" name="USERNAME" /><br />
                            Nowe hasło<br />
                            <input class="input-text" type="password" name="PASSWORD" /><br />
                            Powtórz nowe hasło<br />
                            <input class="input-text" type="password" name="PASSWORD_REPEAT" /><br />
                            Imię<br />
                            <input class="input-text" type="text" name="FIRSTNAME" /><br />
                            Nazwisko<br />
                            <input class="input-text" type="text" name="LASTNAME" /><br />
                            E-mail<br />
                            <input class="input-text" type="text" name="EMAIL" /><br />
                            Numer telefonu<br />
                            <input class="input-text" type="text" name="TELEPHONE" /><br />
                            <input type="checkbox" id="form_checkbox" onclick="Checked()" />
                            Akceptuję regulamin serwisu<br />
                            <input type="submit" id="form_submit" value="Stwórz konto" disabled />
                        </form>
                        <?php
                        if (isset($_SESSION["USER_FAIL"])) {
                            if ($_SESSION["USER_FAIL"]) {
                                echo '<h5 style="color:red">Taki użytkownik już istnieje!</h5>';
                                unset($_SESSION["USER_FAIL"]);
                            }
                        }
                        if (isset($_SESSION["PASS_FAIL"])) {
                            if ($_SESSION["PASS_FAIL"]) {
                                echo '<h5 style="color:red">Hasła się nie zgadzają!</h5>';
                                unset($_SESSION["PASS_FAIL"]);
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <script>
                function Checked() {
                    var checkbox = document.getElementById("form_checkbox");
                    var submit = document.getElementById("form_submit");
                    if (checkbox.checked == true) {
                        submit.disabled = false;
                    } else {
                        submit.disabled = true;
                    }
                }
            </script>
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