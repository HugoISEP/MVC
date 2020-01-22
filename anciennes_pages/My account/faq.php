<!DOCTYPE html>
<html>

<head>

<title>Message</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="../My account/faq.css"/>
<link rel="stylesheet" href="../../css/Menu.css"/>
<link rel="stylesheet" href="../../css/footer.css"/>

</head>

<body>

<center><p class="titre"> Q    &    A </p></center>
<br/><br/><br/>

<?php INCLUDE('../Settings/Menu.php') ?>

<?php

require '../Log in/modeles/database_connection.php';
$bdd = dbConnect();
$reponse = $bdd->query('SELECT * FROM faq_donnees ORDER BY idFAQ_Donnees DESC LIMIT 0, 10');
$id = 0;

while ($donnees = $reponse->fetch()) {
    echo "<section class='faq-section'>
        <input type='checkbox' id=" . $id . ">
        <label for=" . $id . ">" . $donnees['Question'] . "</label>
        <p id='rep'>" . $donnees['Réponse'] . "</p>
        </section>";
    $id=$id+1;
}
?>

<?php INCLUDE('../Settings/footer.php') ?>

</body>
</html>
