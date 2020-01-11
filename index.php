<?php
session_start();

require_once('controller/controller.php');

try {
    if (!isset($_GET['action']) ) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            tryConnection($_POST['email'], $_POST['password']);
        } else {
            connection();
        }
    }
    else{
        if($_GET['action'] == 'generalInfo'){
            generalInfo();
        } elseif ($_GET['action'] == 'generalData'){
            generalData();
        } elseif ($_GET['action'] == 'newTest'){
            newTest();
        } elseif ($_GET['action'] == 'help'){
            help();
        }

    }


} catch (Exception $e) {

}