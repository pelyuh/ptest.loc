<?php
session_start();
if (isset($_POST['name'])) {
  $_SESSION['name'] = $_POST['name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Question 1</title>
</head>
<body>
<p>Hello, <b><?php echo $_SESSION['name']; ?></b></p>

<h1>Test Question 1</h1>

<p>2 + 2 =</p>

<form action="question_2.php" method="post">

    <lable for="answer_2">5</lable>
    <input id="answer_2" type="radio" name="answer_1" value="5" required>
    <br>
    <lable for="answer_1">4</lable>
    <input id="answer_1" type="radio" name="answer_1" value="4" required>
    <br>
    <lable for="answer_3">3</lable>
    <input id="answer_4" type="radio" name="answer_1" value="3" required>
    <br>
    <lable for="answer_4">6</lable>
    <input id="answer_4" type="radio" name="answer_1" value="6" required>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>