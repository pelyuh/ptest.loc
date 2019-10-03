<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ptest get post</title>
</head>
<body>

<form method="" action="">
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

<hr>

<form method="post" action="" enctype="multipart/form-data">
    <div>
        <lable for="user-attachment-file">Attachment file</lable>
        <input type="file" value="" id="user-attachment-file" name="user-attachment-file">
    </div>
    <div>
        <button type="submit" name="user-attachment-file" value="">Attachment file</button>
    </div>
</form>

<br>

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

echo 'Global array $_FILES:';
echo "<pre>";
print_r($_FILES);
echo "</pre>";

// dir - upload - chmod 777
move_uploaded_file($_FILES['user-attachment-file']['tmp_name'], 'upload/' . $_FILES['user-attachment-file']['name']);

?>

</body>
</html>