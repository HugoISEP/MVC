<?php
require_once ('model/UserManage.php');
require ('model/CenterManager.php');

function connection(){
    require ('view/connexionView.php');
}

function tryConnection($emailTest, $passwordTest){
    $userManager = new UserManager();
    if($userManager -> testUserConnection($emailTest, $passwordTest)){
        $_SESSION['email'] = $emailTest;
        $user = $userManager -> getUser();
        $userListTests = $userManager->getUserListTests();
        //require ('view/generalInfoView.php');
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
    require ('view/newClientView.php');
}

function createNewClient($first_name, $last_name, $email, $gender, $password, $phone_number, $birth, $photo){

}