<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <!-- Собственный CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- React -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <title>Сайт туристической компании</title>
  </head>
  <body class="body-top">
    <div id = "content">
    <header class="container">
      <div class="row">
        <div class="col-3">
          <img id="logo" src="img/Logo.png">
        </div>
        <div class="col-9">
          <h1>Путешествуйте с нами!</h1>
        </div>
      </div>
      <?php
      if (empty($_SESSION['login']) or empty($_SESSION['id']))
      {
      ?>
      <div class = "row">
        <div class = "col">
          <div id = "auth_block">
            <div id = "link_register">
              <a href="registr.php">Регистрация</a>
            </div>
            <div id = "link_auth">
              <a href="avtor.php">Авторизация</a>
            </div>
          </div>
        </div>
      </div>
      <?php
        }
        else
        {
      ?>
      <div class = "row">
        <div class = "col">
          <div id = "exit_block">
            <div id = "link_remark">
              <a href="remarks.php">Вы можете оставить отзыв</a>
            </div>
            <div id = "link_exit">
              <a href="exit.php">Выход</a>
            </div>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
      </header>