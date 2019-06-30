<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pl">

<head>
    <title>PHP - strona główna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <header>
        <h2><?php
            echo "Witaj ".$_SESSION["LOGGED_USER"]." na stronie";
        ?></h2>
    </header>

    <section>
        <div class="login">
            <p>Twoje dane:</p>
            <p>Nazwa użytkownika: <?php echo $_SESSION["LOGGED_USER"]?><br />
                Hasło: <?php echo $_SESSION["PASSWORD"]?></p>
            <p><?php 
                if($_SESSION['LOGGED']== false) {
                    echo "Logowanie <b>nie</b> poprawne!<br />";
                    $answer = "Spróbuj jeszcze raz";
                } else {
                    echo "Logowanie poprawne.<br />";
                    $answer = "Dalej";
                }
                ?></p>
            <form action="<?php echo $_SESSION['REDIRECT']?>" method="post">
                <input type="submit" value="<?php echo $answer?>" />
            </form>
        </div>
    </section>
                <?php session_destroy();
                ?>
    <footer>
        <p>Autor strony: Marek Dorosz, e-mail: mdorosz2@wp.pl</p>
    </footer>

</body>

</html>