<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['LOGGED'])) {
    header('Location: login.php');
    exit();
}
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
    <link rel="stylesheet" type="text/css" href="account-style.css">
    <link rel="stylesheet" type="text/css" href="socialmedia.css">
    <link href="https://fonts.googleapis.com/css?family=Chivo&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        input {
            box-sizing: border-box;
            border: none;
            background-color: white;
        }

        input[type="submit"] {
            box-sizing: border-box;
            border: none;
            background: transparent;
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
        <div style="height:62px"></div>
        <div class="container" id="content">
            <div class="row no-gutters">
                <div class="col-4 col-lg-3 account-picture">
                    <img src="images/account/profile-picture.png" width="100%" height="100%">
                </div>
                <div class="col-8 col-lg-9 account-data">
                    <h2>
                        <?php
                        echo $_SESSION['FIRSTNAME'];
                        echo " ";
                        echo $_SESSION['LASTNAME'];
                        ?>
                    </h2>
                    <h5>
                        <?php
                        echo $_SESSION['EMAIL'];
                        echo "<br />";
                        echo $_SESSION['TELEPHONE'];
                        ?>
                    </h5>
                </div>
            </div>
            <div class="account-menu">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="account-link nav-link" href="#">Zlecenia</a>
                            </li>
                            <li class="nav-item">
                                <a class="account-link nav-link" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="account-link nav-link" href="database_delete_account.php">Usuń konto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row no-gutters" style="margin-top:4px;">
                <?php
                require_once "database_connection.php";
                $connection = mysqli_connect($servername, $username, $password);
                if (!$connection) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                mysqli_query($connection, "SET CHARSET utf8");
                mysqli_query($connection, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

                mysqli_select_db($connection, $database);

                $accountTable = "account_" . strtolower($_SESSION["LOGGED_USER"]);

                $sql = "SELECT * FROM $accountTable";
                $result = $connection->query($sql);

                if ($result == null) {
                    echo '<h2>Brak wyników</h2>';
                } else if ($result->num_rows > 0) {
                    echo '<table>';
                    echo '<tr>';
                    echo '<th>Id</th>';
                    echo '<th>Imię</th>';
                    echo '<th>Nazwisko</th>';
                    echo '<th>E-mail</th>';
                    echo '<th>Telefon</th>';
                    echo '<th>Opis</th>';
                    echo '<th style="width:70px"></th>';
                    echo '<th style="width:70px"></th>';
                    echo '</tr>';
                    while ($row = $result->fetch_assoc()) {
                        $button_edit = '<form action="account.php" method="post"><input type="hidden" name="EDIT" value="' . $row["id"] . '" /><input type="submit" value="edytuj" /></form>';
                        $button_delete = '<form action="account.php" method="post"><input type="hidden" name="DELETE" value="' . $row["id"] . '" /><input type="submit" value="usuń" /></form>';

                        if (isset($_POST["EDIT"]) && $_POST["EDIT"] == $row["id"]) {
                            echo "<tr>";
                            echo '<form action="database_edit_record.php" method="post">';
                            echo '<td>' . $row["id"] . '</td>';
                            echo '<td><input type="text" name="FIRSTNAME" value="' . $row["firstname"] . '"></td>';
                            echo '<td><input type="text" name="LASTNAME" value="' . $row["lastname"] . '"></td>';
                            echo '<td><input type="text" name="EMAIL" value="' . $row["email"] . '"></td>';
                            echo '<td><input type="text" name="TELEPHONE" value="' . $row["telephone"] . '"></td>';
                            echo '<td><input type="text" name="CONTENT" value="' . $row["content"] . '"></td>';
                            echo '<td><input type="hidden" name="EDIT" value="' . $row["id"] . '" /><input type="submit" value="zapisz" /></td>';
                            echo "</form>";
                            echo '<td><form action="account.php" method="post"><input type="hidden" name="id" value="" /><input type="submit" value="anuluj" /></form></td>';
                            echo "</tr>";
                        } else {
                            echo '<tr>';
                            echo '<td>' . $row["id"] . '</td>';
                            echo '<td>' . $row["firstname"] . '</td>';
                            echo '<td>' . $row["lastname"] . '</td>';
                            echo '<td>' . $row["email"] . '</td>';
                            echo '<td>' . $row["telephone"] . '</td>';
                            echo '<td>' . $row["content"] . '</td>';

                            if (isset($_POST["DELETE"]) && $_POST["DELETE"] == $row["id"]) {
                                echo '<td><form action="database_delete_record.php" method="post"><input type="hidden" name="DELETE" value="' . $row["id"] . '" /><input type="submit" value="usuń" /></td></form>';
                                echo '<td><form action="account.php" method="post"><input type="hidden" name="id" value="" /><input type="submit" value="anuluj" /></form></td>';
                            } else {
                                echo "<td>$button_edit</td>";
                                echo "<td>$button_delete</td>";
                            }
                            echo '</tr>';
                        }
                    }
                    echo '</table>';
                } else {
                    echo '<h2>Brak wyników</h2>';
                }
                $connection->close();
                ?>
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