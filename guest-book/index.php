<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Book</title>
</head>
<body>

<section>
    <div>
        <form action="" method="post">
            <lable for="guest-name">Guest Name</lable>
            <br>
            <input type="text" name="guest-name" id="guest-name" value="">
            <br>
            <lable for="guest-content">Content</lable>
            <br>
            <textarea name="guest-content" id="guest-content" cols="30" rows="10"></textarea>
            <br>
            <button type="submit" name="guest-content-send" value="guest-content-send">Send</button>
        </form>
    </div>
</section>

<?php

if ( isset($_POST['guest-content-send']) ) {
  $guest_content_item = $_POST['guest-name'] . "|" . $_POST['guest-content']  . "|" .  date('d-m-Y H:i:s') . "\n"  . "*-*";
  file_put_contents( 'guest_content.txt', $guest_content_item, FILE_APPEND);
}

echo "<hr>";
if ( file_exists('guest_content.txt') ) {
  $guest_content_view = file_get_contents('guest_content.txt');
  $guest_content_view3 = explode('*-*', $guest_content_view);

  foreach ($guest_content_view3 as $value) {
      if ($value != null) {
        $str1 = explode('|', $value);

        echo "<div>";
        echo "<h3>Author: " . $str1[0] . "</h3>";
        echo "<p>" . $str1[1] . "</p>";
        echo "<p><strong>Date and time submit:</strong> " . $str1[2] . "</p>";
        echo "</div>";
        echo "<br>";
      }
  }
}

?>


</body>
</html>