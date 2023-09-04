<?php

$array_member = [
  'Neo' => [
    'height' => 170,
    'hobby' => 'baseball'
  ],
  'Yakumo' => [
    'height' => 160,
    'hobby' => 'volleyball'
  ]
];

echo $array_member['Neo']['height'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member_2 = [
  '1' => [
    'Neo' => [
      'height' => 170,
      'hobby' => 'baseball'
    ],
    'Yakumo' => [
      'height' => 160,
      'hobby' => 'volleyball'
    ]
  ],
  '2' => [
    'Shin' => [
      'height' => 175,
      'hobby' => 'study'
    ],
    'Kyokai' => [
      'height' => 175,
      'hobby' => 'training'
    ]
  ]
];

echo $array_member_2['2']['Shin']['height'];

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';
