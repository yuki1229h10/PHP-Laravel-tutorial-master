<?php

$height = 91;

if ($height !== 90) { // 型が同じかどうか
  echo '身長は90cmではありません';
}

// データが入っているかどうか
// isset empty is_null

$test = '';

if (empty($test)) {
  echo '変数は空です';
}
if (!empty($test)) {
  echo '変数は空ではありません';
}

// AND と OR

$signal_1 = 'red';
$signal_2 = 'blue';

if ($signal_1 === 'red' && $signal_2 === 'blue') {
  echo 'good';
}
if ($signal_1 === 'red' || $signal_2 === 'yellow') {
  echo 'good';
}

// 三項演算子
// if else
// 条件 ? 真:偽

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';
echo $comment;
