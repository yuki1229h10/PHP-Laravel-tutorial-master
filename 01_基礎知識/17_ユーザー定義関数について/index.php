<?php

// インプット引数 なし
// アウトプット戻り値 なし

function test()
{
  // 処理
  echo 'test';
}

test();

// インプット引数 あり
// アウトプット戻り値 なし

$comment = 'comment_2';
$comment_3 = 'comment_3';

function getComment($string)
{
  echo $string;
}

getComment($comment_3);

// インプット引数 なし
// アウトプット戻り値 あり

function getNumberOfComment()
{
  return 5;
}

$commentNumber = getNumberOfComment();

// echo getNumberOfComment();

echo $commentNumber;

// 引数2つ
// 戻り値 あり

function sumPrice($int1, $int2)
{
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3, 5);

echo $total;
