<?php

// 指定文字列で分割

$str = '指定文字列で、分割します';

var_dump(explode('、', $str));

// implode

// 正規表現
// 文字かどうか
// 数字かどうか
// 郵便番号
// メールアドレスか test@gmail.com

$str_2 = '特定の文字列が含まれるか確認する';

echo '<pre>';
echo preg_match('/文字列/', $str_2);
echo '</pre>';

// 指定文字列から文字列を取得する

echo substr('あいう', 2);

echo mb_substr('かきくけこ', 2);
