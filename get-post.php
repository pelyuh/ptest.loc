<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ptest get post</title>
</head>
<body>

<form method="post" action="">
    <div>
        <lable for="user-name">User Name</lable>
        <input type="text" value="" id="user-name" name="user-name">
    </div>
    <div>
        <lable for="user-password">Password</lable>
        <input type="password" value="" id="user-password" name="user-password">
    </div>
    <div>
        <button type="submit" name="user-form-send" value="user-form-send">Send</button>
    </div>
</form>

<?php

echo 'Global array $_REQUEST:';
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo 'Global array $_GET:';
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo 'Global array $_POST:';
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

</body>
</html>