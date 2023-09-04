<?php

$height = 90;

if ($height === 90) {
  echo '身長は' . $height, 'cmです';
} else {
  echo '身長は' . $height . 'cmではありません';
}

$signal = 'blue';

if ($signal === 'red') {
  echo 'stop';
} else if ($signal === 'yellow') {
  echo 'stop';
} else {
  echo 'move';
}


$speed = 80;

if ($signal  === 'blue') {
  if ($speed >= 80) { // elseはあまり使わないように
    echo 'high speed';
  }
}
