<?php

require 'db_connection.php';

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

// トランザクション まとまって処理 beginTransaction, commit, rollback
// ex)銀行 残高を確認->Aさんから引き落とし->Bさんに振込

$pdo->beginTransaction();

try {

  //sql処理
  $stmt = $pdo->prepare($sql); //プリペアードステートメント
  $stmt->bindValue('id', 1, PDO::PARAM_INT); //紐付け
  $stmt->execute(); //実行

  $pdo->commit();
} catch (PDOException $e) {

  $pdo->rollBack(); //更新のキャンセル
}
