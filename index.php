<?php
session_start();

require_once('controller/controller.php');

try {
    if (!isset($_GET['action']) && !isset($_SESSION['password'])) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            tryConnection($_POST['email'], $_POST['password']);
        } else {
            connection();
        }
    }
    elseif (isset($_GET['action'])){
        if(isset($_SESSION['email'])){
            if($_GET['action'] == 'generalInfo'){
                generalInfo();
            } elseif ($_GET['action'] == 'generalData'){
                generalData();
            } elseif ($_GET['action'] == 'newTest'){
                newTest();
            } elseif ($_GET['action'] == 'help'){
                help();
            } elseif ($_GET['action'] == 'contactUs'){
                contactUs();
            }
            elseif ($_GET['action'] == 'logOut'){
                logOut();
            }
        }
        elseif ($_GET['action'] == 'newClient'){
            newClient();
        }
    }
    else{
        throw new Exception('ERROR 404');
    }
} catch (Exception $e) {
    echo $e ->getMessage();
}