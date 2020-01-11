<?php
session_start();

if (!empty($_SESSION)) {

    $_SESSION = array();
    session_destroy();

    header('Location: ../Log in/index.php?deco=1');

}
?>