<?php
    session_start();

    if (isset($_POST['topic'])) {
        $topic = $_POST['topic'];
        if ($topic == '') {
            unset($topic);
        }
    }

    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        if ($text == '') {
            unset($text);
        }
    }

    if (empty($topic) or empty($text)) {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    } else {
        include("dbconnect.php");

        if (!empty($_SESSION['id'])) {
            $code = $_SESSION['id'];
            $result = $mysqli->query("INSERT INTO remarks (ID_user, topic, text) VALUES('$code', '$topic', '$text')");

            if ($result == 'TRUE') {
                echo "Ваше сообщение сохранено! Перейти к просмотру сообщений. <a href = 'contacts.php'>О нас</a>";
            } else {
                echo "Ошибка! Сообщение не сохранено";
            }
        }
    }
?>