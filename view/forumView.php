<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=""/>
    <title>Forum</title>
</head>
<body>
<?php ob_start(); ?>
<h1>FORUM</h1>
<form method="post" action="index.php?action=help&amp;action2=forum">
    <label for="messageForum">Send a message :</label>
    <textarea id="messageForum" name="messageForum" rows="5" cols="75"></textarea>
    <input type="submit" value="send">
</form>
<?php
while($messages = $listMessagesForum-> fetch()){
    echo '<p>' . $messages['first_name'] . ' : ' . $messages['text'] . ' ' . $messages['date_and_time'] . '</p>';
}
?>
<?php $content = ob_get_clean();
require ('templateView.php')?>
</body>
</html>