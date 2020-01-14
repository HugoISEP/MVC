<!DOCTYPE html>
<html>

<head>

<title>Message</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="./css/Menu.css"/>

</head>

<body>

<center><p class="titre"> Q    &    A </p></center>
<br/><br/><br/>
<?php

$id = 0;

while ($results = $faq->fetch()) {
    echo "<section class='faq-section'>
        <input type='checkbox' id=" . $id . ">
        <label for=" . $id . ">" . $results['question'] . "</label>
        <p id='rep'>" . $results['answer'] . "</p>
        </section>";
    $id++;
}
?>

</body>
</html>
