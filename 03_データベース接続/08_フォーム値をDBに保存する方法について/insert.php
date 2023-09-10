<?php

// DB接続 PDO
function insertContact($request)
{
  require 'db_connection.php';

  // 入力 DB保存 prepare, bind, execute(配列(全て文字列))
  $params = [
    'id' => null,
    'your_name' => $request['your_name'],
    'email' => $request['email'],
    'url' => $request['url'],
    'gender' => $request['gender'],
    'age' => $request['age'],
    'contact' => $request['contact'],
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
}
