<?php

function generateRandomCode($length)
{
  $characters = '0123456789';
  $code = '';
  $max = strlen($characters) - 1;

  for ($i = 0; $i < $length; $i++) {
    $code .= $characters[mt_rand(0, $max)];
  }

  return $code;
}

$length = mt_rand(1, 4);
$randomCode = generateRandomCode($length);

echo $randomCode;

// commit test2
