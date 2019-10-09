<?php

require_once('db_connect.php');
require_once('function.php');

if ($_POST['guest-name'] != '' AND $_POST['guest-content'] != '') {
  db_insert();
}

$arr_messages = bd_select($arr_messages);

/*
$author = 'Іра';
$values = "Існує багато варіацій уривків з Lorem Ipsum, але більшість з них зазнала певних змін на кшталт жартівливих вставок або змішування слів, які навіть не виглядають правдоподібно. Якщо ви збираєтесь використовувати Lorem Ipsum, ви маєте упевнитись в тому, що всередині тексту не приховано нічого, що могло б викликати у читача конфуз. Більшість відомих генераторів Lorem Ipsum в Мережі генерують текст шляхом повторення наперед заданих послідовностей Lorem Ipsum. Принципова відмінність цього генератора робить його першим справжнім генератором Lorem Ipsum. Він використовує словник з більш як 200 слів латини та цілий набір моделей речень - це дозволяє генерувати Lorem Ipsum, який виглядає осмислено. Таким чином, згенерований Lorem Ipsum не міститиме повторів, жартів, нехарактерних для латини слів і т.ін.";
$values = mysqli_real_escape_string($db, $values);

$db_insert = "INSERT INTO content(author, review) VALUES ('$author', '$values')";
$db_update = "UPDATE content SET review='$values' WHERE  author='$author'";
$db_delete = "DELETE FROM content WHERE id=7";
$bd_select = "SELECT * FROM content";


$insert_result = mysqli_query($db, $db_update);
$insert_result = mysqli_query($db, $db_delete);
$result = mysqli_fetch_all(mysqli_query($db, $bd_select), MYSQLI_ASSOC);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Book (Data Base)</title>

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
                <input type="text" name="guest-name" id="guest-name" required>
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
  <?php if (!empty($arr_messages)): ?>
    <?php foreach ($arr_messages as $message): ?>
          <div class="message">
              <h3>Author: <?= $message['author'] ?> |
                  Data: <?= $message['date'] ?></h3>
              <div><?= nl2br(htmlspecialchars($message['review'])) ?></div>
          </div>
    <?php endforeach; ?>
  <?php endif; ?>
</section>
</body>
</html>