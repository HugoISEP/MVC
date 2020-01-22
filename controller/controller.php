<?php
require_once ('model/UserManager.php');
require_once ('model/CenterManager.php');
require_once ('model/ConnectionManager.php');

function connection(){
    require ('view/connexionView.php');
}

function tryConnection($emailTest, $passwordTest){
    $connectionManager = new ConnectionManager();
    $userManager = new UserManager();
    if($connectionManager -> testUserConnection($emailTest, $passwordTest)){
        $user = $userManager -> getUser();
        $userListTests = $userManager->getUserListTests();
        header ('Location: index.php?action=generalInfo');
    } else{
        require ('view/connexionView.php');
    }
}

function generalData(){
    require ('view/generalDataView.php');
}

function generalInfo(){
    $userManager = new UserManager();
    $user = $userManager -> getUser();
    $userListTests = $userManager->getUserListTests();
    require ('view/generalInfoView.php');
}

function newTest(){
    require ('view/newTestView.php');
}

function help(){
    require ('view/helpView.php');
}

function contactUs(){
    require ('view/contactUsView.php');
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
    require ('view/newClientView.php');
}



function createNewClient($first_name, $last_name, $email, $email_center, $gender, $password, $phone_number, $birth, $photo){
    $connectionManager = new ConnectionManager();

    $newClientData = $connectionManager->addNewClient($first_name, $last_name, $email, $email_center, $gender, $password, $phone_number, $birth, $photo);
    if ($newClientData == false){
        require ('view/404View.php');
        throw new Exception('ERROR 404');

    }
    else {
        header ('Location: index.php');
    }

}

function faq(){
    $userManager = new UserManager();
    $faqData = $userManager->getfaq();
    require ('view/faqView.php');
}

function message(){
    $userManager = new UserManager();
    $listMessages = $userManager->getMessages();
    require ('view/userMessageView.php');
}

function writeAMessage($message_content, $type_problem){
    $userManager = new UserManager();
    $newMessageData = $userManager->addAMessage($message_content, $type_problem);
    if ($newMessageData == false){
        require ('view/404View.php');
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
        require ('view/404View.php');
        throw new Exception('ERROR 404');

    }
    else {
        header('Location: index.php?action=help&action2=forum');
    }
}

function forum(){
    $userManager = new UserManager();
    $listMessagesForum = $userManager->getMessagesForum();
    require ('view/forumView.php');
}

function userManual(){
    require ('view/usermanualView.php');
}

function projectDisplay(){
    require ('view/projectdisplayView.php');
}
