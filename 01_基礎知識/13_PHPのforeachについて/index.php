<?php

// 複数の値 foreach

$members = [
  'name' => 'Neo',
  'height' => '170',
  'hobby' => 'baseball'
];

// valueのみ表示
foreach ($members as $member) {
  echo $member;
}

echo '<br>';

// keyとvalue、それぞれ表示
foreach ($members as $key => $value) {
  echo $key . 'は' . $value . 'です';
}

echo '<br>';

$members_2 = [
  'Neo' => [
    'height' => 170,
    'hobby' => 'baseball'
  ],
  'Yakumo' => [
    'height' => 160,
    'hobby' => 'volleyball'
  ]
];

// 多段階の配列を展開
foreach ($members_2 as $member_1) {
  foreach ($member_1 as $member => $value) {
    echo $member . 'は' . $value . 'です';
  }
}
