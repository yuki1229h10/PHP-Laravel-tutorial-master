<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
</head>

<body>

  <?php
  session_start();
  $_SESSION = array();
  session_destroy();
  echo "ログアウトしました。";
  ?>

</body>

</html>
