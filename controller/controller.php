<?php
require_once ('model/UserManage.php');

function connection(){
    require ('view/connexionView.php');
}



function tryConnection($emailTest, $passwordTest){
    $userManager = new UserManage();
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
    $userManager = new UserManage();
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