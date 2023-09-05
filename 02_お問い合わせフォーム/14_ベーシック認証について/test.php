<?php
// パスワードを記録したファイルの場所
echo __FILE__;
// /Applications/MAMP/htdocs/PHP-Laravel-tutorial-master/02_お問い合わせフォーム/14_ベーシック認証について/test.php

echo '<br>';
// パスワード(暗号化)
echo (password_hash('password123', PASSWORD_BCRYPT));
