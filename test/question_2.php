<?php
session_start();
if (isset($_POST['answer_1'])) {
  $_SESSION['answer_1'] = $_POST['answer_1'];
}
else {
  $_SESSION['answer_1'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Question 2</title>
</head>
<body>
<p>Hello, <b><?php echo $_SESSION['name']; ?></b></p>

<h1>Test Question 2</h1>

<p>10 + 2 =</p>

<form action="question_3.php" method="post">

    <lable for="answer_2">13</lable>
    <input id="answer_2" type="radio" name="answer_2" value="13" required>
    <br>
    <lable for="answer_1">11</lable>
    <input id="answer_1" type="radio" name="answer_2" value="11" required>
    <br>
    <lable for="answer_3">12</lable>
    <input id="answer_4" type="radio" name="answer_2" value="12" required>
    <br>
    <lable for="answer_4">14</lable>
    <input id="answer_4" type="radio" name="answer_2" value="14" required>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>