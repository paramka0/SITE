<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if ($name == '') {
            unset($name);
        }
    }

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

    if (empty($login) or empty($pass)) 
    {
        exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    include("dbconnect.php");

    $result = $mysqli->query("SELECT ID FROM users WHERE login = '$login' ");
    $myrow = $result->fetch_assoc();

    if (!empty($myrow['ID'])) {
        exit ("Введенный вами логин уже зарегистрирован. Введите другой логин.");
    }

    $result2 = $mysqli->query ("INSERT INTO users (Name, Login, Pass) VALUES('$name', '$login', '$pass')");

    if ($result2 == 'TRUE') {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт под своим именем. <a href = 'index.php'>Главная страница</a>";
    }
    else {
        echo "Ошибка! Вы не зарегистрированы.";
    }
?>