<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <style>
        .table {
            margin: 20px;
            display: flex;
            flex-wrap: nowrap;

            text-align: center;
        }

        .table div {
            margin: 30px;
        }

        .table ul {
            padding: 0;
        }

        .table ul li {
            list-style: none;
        }

        .table p {
            font-size: 17px;
            text-align: right;
        }
    </style>

</head>
<body>

<?php

// ===  Enabled error ===
ini_set("display_errors", 1);
error_reporting(E_ALL);
// ===  / Enabled error ===


$one = 22;

$two = 11;

echo gettype($one);
echo '<br>';
echo gettype($two);
echo '<br>';

if ($one = $two) {
  echo "Рівні";
  echo '<br>';
  echo gettype($one);
  echo '<br>';
  echo gettype($two);
}
else {
  echo "Не Рівні";
  echo '<br>';
  echo gettype($one);
  echo '<br>';
  echo gettype($two);

}
echo '<br>';
echo "Значення $one; Значення $two";
echo '<br>';

$Aaa = [
  'вилка' => '20 грн.',
  'ложка' => '30 грн.',
];

$B =& $Aaa['сковородка'];

echo count($Aaa) . " " . $Aaa['сковородка'] . " " . gettype($Aaa['сковородка']);

echo '<hr>';

echo "<div class=\"table\">";

$a = 1;

while ($a <= 10) {
  echo "<div>";
  echo "<ul>";
  echo "<h2>$a</h2>";

  $b = 1;

  while ($b <= 10) {
    $c = $a * $b;
    echo "<p>$a * $b = $c</p>";
    $b++;
  }

  $a++;
  echo "</ul>";
  echo "</div>";
}
echo "</div>";

echo "<hr>";

$goods = [
  'Banana',
  'Orange',
  'Mandarin',
  'An Apple',
  'Kiwi',
  'Beet',
  'Carrot',
  'Potatoes',
  'Cabbage',
];

$array_index = 0;

while ($array_index < count($goods)) {

  echo $goods[$array_index];
  $array_index++;
  echo "<br>";
}

echo "<hr>";

$tech_goods = [
  [
    'title'       => 'Nokia',
    'price'       => 200,
    'description' => 'Description',
  ],
  [
    'title'       => 'iPad',
    'price'       => 400,
    'description' => 'Description',
  ],
  [
    'title'       => 'iPhone',
    'price'       => 500,
    'description' => 'Description',
  ],
];

$tech_i = 0;
while ($tech_i < count($tech_goods)) {
  echo "<div>";
  echo "<h3>" . $tech_goods[$tech_i]['title'] . "</h3>";
  echo "<p>" . $tech_goods[$tech_i]['price'] . "</p>";
  echo "<p>" . $tech_goods[$tech_i]['description'] . "</p>";
  echo "</div>";
  $tech_i++;
}

echo '<hr>';

echo "<div class=\"table\">";


for ($a = 1; $a <= 10; $a++) {
  echo "<div>";
  echo "<ul>";
  echo "<h2>$a</h2>";

  for ($b = 1; $b <= 10; $b++) {
    $c = $a * $b;
    echo "<p>$a * $b = $c</p>";
  }

  echo "</ul>";
  echo "</div>";
}
echo "</div>";

echo "<hr>";

$fop = [
  'Popov' => ['Ivan' => ['One', 'Two',]],
  'Orlov',
  'Petrov',
  'Ivanoff',
  'Nemiroff',
  'Purtov',
  'Vonogradov',
  'Sidorov',
];

function fop_count($array) {
  $i = 0;
  foreach ($array as $key => $value) {
    $i++;
  }
  return $i;
}

echo '<pre>';
print_r($fop);
echo '</pre>';
echo '<br>';

echo "Кількість елементів масиву дорвінює: " . fop_count($fop);


echo "<hr>";

function UpperToLower($str) {
  for ($i = 0; $i < strlen($str); $i++):
    $char = ord($str{$i});
    if ($char >= 65 && $char <= 90):
      $str{$i} = chr($char + 32);
    endif;
  endfor;
  return $str;
}


$str = "ASfdf3234^*&(DA";
echo $str . "<br>";
UpperToLower($str);
echo $str;
echo "<br>";
var_dump("aC" == "aC");

function SortValue(&$arr) {
  //$pr =true;
  do {
    $pr = false;

    for ($i = 0; $i < sizeof($arr) - 1; $i++) {
      if (UpperToLower($arr[$i]) > UpperToLower($arr[$i + 1])) {
        $f           = $arr[$i];
        $arr[$i]     = $arr[$i + 1];
        $arr[$i + 1] = $f;
        $pr          = true;
      }
    }
  } while ($pr);
}

$arr = ["a", "bf", "c", "b", "G", "A", "d", "bB"];

SortValue($arr);

print_r($arr);

echo '<hr>';

$action = ['left' => 'survive', 'right' => 'kill\'em all'];

echo "Вибраний елемент: {$action['left']}";
echo '<br>';
echo "Вибраний елемент: $action[right]";
echo '<hr>';

?>

</body>
</html>