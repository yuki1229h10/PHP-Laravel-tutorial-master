<?php
session_start();
require_once('database.php');
require_once('auth.php');
$errorMessage = '';

if ($_POST['mode'] == 'login') {
  if (!empty($_POST['form']['email']) && !empty($_POST['form']['password'])) {
    if ($account = login($_POST['form']['email'], $_POST['form']['password'])) {
      $_SESSION['account'] = $account;
      header('Location: login.php');
    } else {
      $errorMessage = "ログインに失敗しました。";
    }
  } else {
    $errorMessage = "メールアドレスとパスワードを入力してください。";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>

  <?php if ($login) : ?>
    ログインしました。;
  <?php else : ?>
    <?php echo $errorMessage; ?>
    <input type="text" name="form[email]" value="" placeholder="メールアドレスを入力して下さい。">
    <input type="password" name="form[password]" value="" placeholder="パスワードを入力して下さい。">
    <input type="hidden" name="mode" value="login">
    <input type="submit" name="login" value="ログイン">
  <?php endif; ?>

</body>

</html>
