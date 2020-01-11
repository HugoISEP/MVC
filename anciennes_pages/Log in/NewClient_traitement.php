<?php

require 'modeles/database_connection.php';
$bdd = dbConnect();
$req = $bdd->prepare('INSERT INTO users (Mail, Last_Name, First_Name, Birthday, Phone_Number, Password, LinkImg, Center_Mail) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array(
    $_POST['mail'],
    $_POST['last_name'],
    $_POST['first_name'],
    $_POST['age'],
    $_POST['phone_number'],
    $_POST['password'],
    $_FILES['photo']['name'],
    $_POST['password']
    )
);

if (isset($_FILES['photo']['tmp_name'])) {
    $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);

}

header('Location: NewClient.php?success');
?>