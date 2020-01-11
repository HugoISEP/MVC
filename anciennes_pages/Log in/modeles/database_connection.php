<?php

function dbConnect()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=moduloheart;charset=utf8', 'root', '');
        return $bdd;
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}