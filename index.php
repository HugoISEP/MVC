<?php
session_start();

require_once('controller/controller.php');

try {
    //Si l'utilisateur n'est pas connectée et qu'il n'y a pas d'action
    if (!isset($_GET['action']) && !isset($_SESSION['email_user'])) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            tryConnection($_POST['email'], $_POST['password']);
        } else {
            connection();
        }
    }
    //Sinon si l'utilisateur n'est pas connecté et qu'il a cliqué sur "new client"
    elseif ($_GET['action'] == 'newClient' && !isset($_SESSION['email_user'])){

        if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['email_center']) && isset($_POST['gender']) && isset($_POST['password']) && $_POST['phone_number'] &&  $_POST['birth'] && isset($_FILES['photo'])) {
            createNewClient($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['email_center'], $_POST['gender'], $_POST['password'], $_POST['phone_number'], $_POST['birth'], $_FILES['photo']);
        } else {
            newclient();
        }
    }
    //Si l'utilisateur est connecté
    elseif (isset($_SESSION['email_user']) || isset($_SESSION['email_center']) || isset($_SESSION['email_admin'])) {
        if ($_SESSION['userType'] == 'user') {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'generalInfo') {
                    UserGeneralInfo();
                } elseif ($_GET['action'] == 'generalData') {
                    UserGeneralData();
                } elseif ($_GET['action'] == 'newTest') {
                    newTest();
                } elseif ($_GET['action'] == 'help') {
                    if (isset($_GET['action2'])) {
                        if ($_GET['action2'] == 'message') {
                            if (isset($_POST['typeOfProblem']) && isset($_POST['problemExplenation'])) {
                                writeAMessage($_POST['problemExplenation'], $_POST['typeOfProblem']);
                            } else {
                                message();
                            }
                        } elseif ($_GET['action2'] == 'forum') {
                            if (isset($_POST['messageForum'])) {
                                writeAMessageInForum($_POST['messageForum']);
                            } else {
                                forum();
                            }
                        } elseif ($_GET['action2'] == 'faq') {
                            faq();
                        } else {
                            throw new Exception("page not found");
                        }
                    } else {
                        help();
                    }
                } elseif ($_GET['action'] == 'contactUs') {
                    contactUs();
                } elseif ($_GET['action'] == 'logOut') {
                    logOut();
                } elseif ($_GET['action'] == 'faq') {
                    faq();
                } elseif ($_GET['action'] == 'userManual') {
                    userManual();
                } elseif ($_GET['action'] == 'projectDisplay') {
                    projectDisplay();
                } elseif ($_GET['action'] == 'editYourProfilView'){
                    if(isset($_GET['action2']) && $_GET['action2'] == 'update') {
                        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password'])) {
                            editYourProfilUpdate($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']);
                        }else{
                            editYourProfil();
                        }
                    } else{
                        editYourProfil();
                    }
                } else if($_GET['action'] == 'cgu'){
                    cgu();
                } else {
                    throw new Exception('Page not found');
                }
            } elseif (!isset($_GET['action'])) {
                header('Location: index.php?action=generalInfo');
            } else {
                throw new Exception('Page not found');
            }


        //si l'utilisateur est un centre
        } elseif($_SESSION['userType'] == 'center'){
            if($_GET['action'] == 'generalInfo'){
                centerGeneralInfo();
            } if($_GET['action'] == 'generalData'){
                centerGeneralData();
            } if($_GET['action'] == 'profiles'){
                if(isset($_GET['action2'])){
                    if($_GET['action2'] == 'searchProfiles'){
                        centerSearchProfiles();
                    } else{
                        throw new Exception();
                    }
                } elseif (!isset($_GET['action2'])){
                    centerProfiles();
                }
            }
            if ($_GET['action'] == 'logOut') {
                logOut();
        }


        //si l'utilisateur est un admin
        } elseif ($_SESSION['userType'] == 'admin'){
            if($_GET['action'] == 'generalInfo'){
                adminGeneralInfo();
            }
            elseif ($_GET['action'] == 'logOut') {
                logOut();
            }
        } else{
            throw new Exception('page not found');
        }
    }
    else{
        throw new Exception('page not found');
    }
} catch (Exception $e) {
    require('view/404View.php');
    echo $e ->getMessage();
}