<?php
require 'database_connection.php';
$bdd = dbConnect();
$req= "SELECT LinkImg FROM pp WHERE Mail = ?";
$reponse = $bdd->prepare($req);
$reponse->execute(array("fathi@gmail.com"));
$resultat = $reponse->fetch();

if (isset($_FILES['photo']['tmp_name'])) {
    $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
}
?>