<?php
require_once 'function.php';

define('FILE_BOOK', 'guest_book.txt');

if (!empty($_POST)) {
  save_content();
  header("Location: {$_SERVER ['PHP_SELF'] }");
  exit;
}

$messages = get_messages();
$messages = array_messages($messages);
//print_array($messages);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Book v2</title>

    <style>
        .message {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<section>
    <div>
        <form action="index.php" method="post">
            <p>
                <lable for="guest-name">Guest Name</lable>
                <br>
                <input type="text" name="guest-name" id="guest-name">
            </p>
            <p>
                <lable for="guest-content">Review</lable>
                <br>
                <textarea name="guest-content" id="guest-content" cols="100"
                          rows="10"></textarea>
                <br>
            </p>
            <button type="submit" name="guest-content-send"
                    value="guest-content-send">Send
            </button>
        </form>
    </div>

    <hr>
  <?php if ( !empty($messages) ): ?>
  <?php foreach ($messages as $message): ?>
    <?php $message = get_format_message($message); ?>
    <div class="message">
        <h3>Author: <?=$message[0]?> | Data: <?=$message[2]?></h3>
        <div><?=nl2br(htmlspecialchars($message[1]))?></div>
    </div>
  <?php endforeach; ?>
    <?php endif; ?>
</section>
</body>
</html>