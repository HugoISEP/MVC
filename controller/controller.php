<?php
require_once ('model/UserManager.php');
require_once ('model/CenterManager.php');
require_once ('model/ConnectionManager.php');

function connection(){
    require('view/userView/connexionView.php');
}

function tryConnection($emailTest, $passwordTest){
    $connectionManager = new ConnectionManager();
    $userManager = new UserManager();
    if($connectionManager -> testUserConnection($emailTest, $passwordTest)){
        $user = $userManager -> getUser();
        $userListTests = $userManager->getUserListTests();
        header ('Location: index.php?action=generalInfo');
    } else{
        require('view/userView/connexionView.php');
    }
}

function userGeneralData(){
    require('view/userView/generalDataView.php');
}

function userGeneralInfo(){
    $userManager = new UserManager();
    $user = $userManager -> getUser();
    $userListTests = $userManager->getUserListTests();
    require('view/userView/generalInfoView.php');
}

function centerGeneralInfo(){
    $centerManager = new CenterManager();
    $tests = new CenterManager();
    $center = $centerManager->getCenter();
    $listTests = $tests->getUserTests();
    require ('view/centerView/centerGeneralInfoView.php');
}

function centerProfiles(){
    require ('view/centerView/centerProfilesView.php');
}


function centerGeneralData(){
    require ('view/centerView/centerGeneralDataView.php');
}

function centerSearchProfiles(){
    require ('view/centerView/centerSearchProfilesView.php');
}

function newTest(){
    require('view/userView/newTestView.php');
}

function help(){
    require('view/userView/helpView.php');
}

function contactUs(){
    require('view/userView/contactUsView.php');
}

function logOut(){
    header ('Location: index.php');
    if (!empty($_SESSION)) {
        $_SESSION = array();
        session_destroy();
    }
}

function newclient(){
    $centerManager = new CenterManager();
    $centersData = $centerManager->getCenters();
    require('view/userView/newClientView.php');
}



function createNewClient($first_name, $last_name, $email, $email_center, $gender, $password, $phone_number, $birth, $photo){
    $connectionManager = new ConnectionManager();

    $newClientData = $connectionManager->addNewClient($first_name, $last_name, $email, $email_center, $gender, $password, $phone_number, $birth, $photo);
    if ($newClientData == false){
        require('view/userView/404View.php');
        throw new Exception('ERROR 404');

    }
    else {
        header ('Location: index.php');
    }

}

function faq(){
    $userManager = new UserManager();
    $faqData = $userManager->getfaq();
    require('view/userView/faqView.php');
}

function message(){
    $userManager = new UserManager();
    $listMessages = $userManager->getMessages();
    require('view/userView/userMessageView.php');
}

function writeAMessage($message_content, $type_problem){
    $userManager = new UserManager();
    $newMessageData = $userManager->addAMessage($message_content, $type_problem);
    if ($newMessageData == false){
        require('view/userView/404View.php');
        throw new Exception('ERROR 404');

    }
    else {
        header('Location: index.php?action=help&action2=message');
    }
}

function writeAMessageInForum($text){
    $userManager = new UserManager();
    $newMessageInForum = $userManager->addAMessageInForum($text);
    if ($newMessageInForum == false){
        require('view/userView/404View.php');
        throw new Exception('ERROR 404');

    }
    else {
        header('Location: index.php?action=help&action2=forum');
    }
}


function forum(){
    $userManager = new UserManager();
    $listMessagesForum = $userManager->getMessagesForum();
    require('view/userView/forumView.php');
}

function userManual(){
    require('view/userView/usermanualView.php');
}

function projectDisplay(){
    require('view/userView/projectdisplayView.php');
}

function editYourProfil(){
    require('view/userView/editYourProfilView.php');
}

function editYourProfilUpdate($fisrtName,$lastName,$email,$password){
    $userManager = new UserManager();
    if($fisrtName != $_SESSION['first_Name']){
        $update = $userManager->updateProfil("firstName", $fisrtName);
    }
    if ($lastName != $_SESSION['last_Name']){
        $update = $userManager->updateProfil("lastName", $lastName);
    }
    if ($email != $_SESSION['email']){
        $update = $userManager->updateProfil("email", $email);
    }
    if ($password !=  $_SESSION['password']){
        $update = $userManager->updateProfil("lastName", $password);
    }
    if($update == false){
        require('view/userView/404View.php');
        throw new Exception('ERROR 404');
    }
}
