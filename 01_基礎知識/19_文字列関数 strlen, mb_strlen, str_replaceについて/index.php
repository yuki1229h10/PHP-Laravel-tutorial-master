<?php

// 文字列の長さ
// 日本語 SJIS, UTF-8 3から6バイト
$text = 'あいうえお';

// echo strlen($text);

echo mb_strlen($text);

// 文字列の置換


$str = '文字列を置換します';
echo str_replace('置換', 'ちかん', $str);
