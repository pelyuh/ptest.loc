<?php
session_start();
if (isset($_POST['answer_3'])) {
  $_SESSION['answer_3'] = $_POST['answer_3'];
}
else {
  $_SESSION['answer_3'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Question 4</title>
</head>
<body>
<p>Hello, <b><?php echo $_SESSION['name']; ?></b></p>

<h1>Test Question 4</h1>

<p>10 * 2 =</p>

<form action="result.php" method="post">

    <lable for="answer_2">30</lable>
    <input id="answer_2" type="radio" name="answer_4" value="30" required>
    <br>
    <lable for="answer_1">25</lable>
    <input id="answer_1" type="radio" name="answer_4" value="25" required>
    <br>
    <lable for="answer_3">12</lable>
    <input id="answer_4" type="radio" name="answer_4" value="12" required>
    <br>
    <lable for="answer_4">20</lable>
    <input id="answer_4" type="radio" name="answer_4" value="20" required>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>