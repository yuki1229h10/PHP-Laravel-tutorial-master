<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  echo 'セッション破棄しました';

  $_SESSION = [];

  if (isset($_COOKIE['PHPSESSID'])) {
    setcookie('PHPSESSID', '', time() - 1800, '/');
  }

  session_destroy();

  echo 'セッション';
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';

  echo 'クッキー';
  echo '<pre>';
  var_dump($_COOKIE);
  echo '</pre>';

  ?>

</body>

</html>
