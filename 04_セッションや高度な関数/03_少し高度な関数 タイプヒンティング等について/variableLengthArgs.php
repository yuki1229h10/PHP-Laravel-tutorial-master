<?php
// 可変引数
function combine(string ...$name): string
{
  $combinedName = '';
  for ($i = 0; $i < count($name); $i++) {
    $combinedName .= $name[$i];
    if ($i != count($name) - 1) {
      $combinedName .= '.';
    }
  }
  return $combinedName;
}

$lName = 'lastName';
$fName = 'firstName';
$name1 = combine($fName, $lName);

echo 'result: ' . $name1;
echo '<br>';

$variableLength = combine('test1', 'test2', 'test3');
echo $variableLength;
