<?php

$arr = [
  0 => ['Test 1.1', 'Test 1.2', 'Test 1.3'],
  1 => ['Test 2.1', 'Test 2.2', 'Test 2.3'],
];

echo '<pre>';
print_r($arr);
echo '</pre>';

for ($i = 0; $i < count($arr); $i++) {
  for ($k = 0; $k < count($arr[$i]); $k++) {
    echo " >> " . $arr[$i][$k];
  }
  echo "<br>";
}

echo "<hr>";

$arr2 = array(array());