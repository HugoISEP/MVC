<?php

require ROOT . "modeles/database_connection.php";

function getUsers()
{
    $bdd = dbConnect();
    $req = $bdd->query("SELECT * FROM user");
    return $req;
}

function insertUser($LastName, $FirstName, $Birthday)
{
    $bdd = dbConnect();
    $req = $bdd->prepare("INSERT INTO users(Last Name, First Name, Birthday) VALUES(:Last Name, :First Name, :Birthday)");
    $req->bindParam("Last Name", $LastName);
    $req->bindParam("First Name", $FirstName);
    $req->bindParam("Birthday", $Birthday);
    $req->execute();
    $req->closeCursor();
}