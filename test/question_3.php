<?php
session_start();
if (isset($_POST['answer_2'])) {
  $_SESSION['answer_2'] = $_POST['answer_2'];
}
else {
  $_SESSION['answer_2'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Question 3</title>
</head>
<body>
<p>Hello, <b><?php echo $_SESSION['name']; ?></b></p>

<h1>Test Question 3</h1>

<p>10 - 2 =</p>

<form action="question_4.php" method="post">

    <lable for="answer_2">7</lable>
    <input id="answer_2" type="radio" name="answer_3" value="7" required>
    <br>
    <lable for="answer_1">9</lable>
    <input id="answer_1" type="radio" name="answer_3" value="9" required>
    <br>
    <lable for="answer_3">10</lable>
    <input id="answer_4" type="radio" name="answer_3" value="10" required>
    <br>
    <lable for="answer_4">8</lable>
    <input id="answer_4" type="radio" name="answer_3" value="8" required>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>