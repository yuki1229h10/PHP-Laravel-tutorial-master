<?php
session_start();

if (isset($_SESSION['account'])) {
  $account = authCheck($_SESSION['account']['email'], $_SESSION['account']['password']);

  if (isset($account)) {
    $login = true;
    $_SESSION['account'] = $account;
  } else {
    $login = false;
    unset($_SESSION['account']);
  }
} else {
  $login = false;
}
