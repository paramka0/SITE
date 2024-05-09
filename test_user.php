<?php
    session_start();

    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        if ($login == '') {
            unset($login);
        }
    }

    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
        if ($pass == '') {
            unset($pass);
        }
    }

    if (empty($login) or empty($pass)) {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    include ("dbconnect.php");

    $result = $mysqli->query("SELECT * FROM users WHERE login = '$login' ");
    $myrow = $result->fetch_assoc();

    if (empty($myrow['Login'])) {
        exit ("Введенный вами login или пароль неверный.");
    }
    else {
        if ($myrow['Pass'] == $pass) {
            $_SESSION['login'] = $myrow['Login'];
            $_SESSION['id'] = $myrow['ID'];
            echo "Вы успешно вошли на сайт! <a href = 'index.php'>Главная страница<a>";
        }
        else {
            exit ("Введенный вами login или пароль неверный.");
        }
    }
?>