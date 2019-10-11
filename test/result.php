<?php
session_start();
if (isset($_POST['answer_4'])) {
  $_SESSION['answer_4'] = $_POST['answer_4'];
}
else {
  $_SESSION['answer_4'] = 0;
}
$correct     = '<span class="correct">The answer is correct.</span>';
$not_correct = '<span class="not_correct">The answer is not correct.</span>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>

    <style>
        .correct {
            color: darkgreen;
        }

        .not_correct {
            color: red;
        }
    </style>
</head>
<body>
<p>Hello, <b><?php echo $_SESSION['name']; ?></b></p>

<h1>Result</h1>
<p>2 + 2 =
  <?php
  echo $_SESSION['answer_1'] . ' ';
  echo $answer_1 = $_SESSION['answer_1'] == 4 ? $correct : $not_correct;
  ?>
</p>

<p>10 + 2 =
  <?php
  echo $_SESSION['answer_2'] . ' ';
  echo $answer_2 = $_SESSION['answer_2'] == 12 ? $correct : $not_correct;
  ?>
</p>

<p>10 - 2 =
  <?php
  echo $_SESSION['answer_3'] . ' ';
  echo $answer_3 = $_SESSION['answer_3'] == 8 ? $correct : $not_correct;
  ?>
</p>

<p>10 * 2 =
  <?php
  echo $_SESSION['answer_4'] . ' ';
  echo $answer_4 = $_SESSION['answer_4'] == 20 ? $correct : $not_correct;
  ?>
</p>

<p>
    <a href="index.php">Repeat test</a>
</p>

</body>
</html>
