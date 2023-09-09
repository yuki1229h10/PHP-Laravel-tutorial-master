<?php

require 'db_connection.php';

// ユーザー入力なし query
// $sql = 'select * from contacts where id = 1'; //sql
// $stmt = $pdo->query($sql); //sql実行 ステートメント

// $result = $stmt->fetchAll();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

// ユーザー入力あり prepare, bind, execute
// 悪意user delete * SQLインジェクション対策
$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダ
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue('id', 2, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';
