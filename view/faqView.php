<!DOCTYPE html>
<html>

<head>

<title>Message</title>
<meta charset="utf-8"/>
    <link rel="stylesheet" href="./css/faq.css"/>
</head>
<body>
<?php ob_start(); ?>
<center><p class="titre"> Q    &    A </p></center>
<br/><br/><br/>
<?php

$id = 0;

while ($results = $faqData->fetch()) {
    echo "<section class='faqClass'>
        <input type='checkbox' id=" . $id . ">
        <label for=" . $id . ">" . $results['question'] . "</label>
        <p class='answer_faq'>" . $results['answer'] . "</p>
        </section>";
    $id++;
}
?>
<?php $content = ob_get_clean();
require ('templateView.php')?>
</body>
</html>
