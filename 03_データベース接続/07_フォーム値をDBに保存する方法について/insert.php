<?php

// DB接続 PDO
require 'db_connection.php';

// 入力 DB保存 prepare, bind, execute(配列(全て文字列))
$params = [
  'id' => null,
  'your_name' => 'なまえ',
  'email' => 'test@test.com',
  'url' => 'http://test.com',
  'gender' => '1',
  'age' => '2',
  'contact' => 'テストをしています。',
  'created_at' => null
];

$count = 0;
$columns = '';
$values = '';

foreach (array_keys($params) as $key) {
  if ($count++ > 0) {
    $columns .= ',';
    $values .= ',';
  }
  $columns .= $key;
  // bindの代わりの処理
  $values .= ':' . $key;
}

$sql = 'insert into contacts (' . $columns . ')values(' . $values . ')';
// var_dump($columns);
// exit;

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
