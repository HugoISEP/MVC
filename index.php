<?php
session_start();

require_once('controller/controller.php');

try {
    if (!isset($_GET['action']) && !isset($_SESSION['email'])) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            tryConnection($_POST['email'], $_POST['password']);
        } else {
            connection();
        }
    }
    elseif (isset($_SESSION['email'])){
        if(isset($_GET['action'])){
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
        elseif (!isset($_GET['action'])){
            header('Location: index.php?action=generalInfo');
        }
        elseif ($_GET['action'] == 'newClient'){
            if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['password'])) {
                createNewClient($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['email_center'], $_POST['gender'], $_POST['password'], $_POST['phone_number'], $_POST['birth'], $_FILES['photo']);
            } else {
                newclient();
            }
        }
    }
    else{
        throw new Exception('ERROR 404');
    }
} catch (Exception $e) {
    echo $e ->getMessage();
}