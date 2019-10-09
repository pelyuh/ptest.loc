<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Question</title>
</head>
<body>
<h1>Test</h1>

<form action="question_1.php" method="post">
    <lable for="name">Your name</lable>
    <input id="name" type="text" name="name" value="" required>

    <button type="submit">Send</button>
</form>
</body>
</html>