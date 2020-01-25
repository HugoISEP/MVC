<?php
require_once("model/Manager.php");

class UserManager extends Manager
{

    public function GetUser()
    {
        $db = $this->dbConnect();
        $user = $db->prepare('SELECT * FROM users WHERE email = :email');
        $user->execute(array('email'=>$_SESSION['email_user']));

        return $user;
    }

    public function getUserListTests(){
        $db = $this->dbConnect();
        $userListTest= $db->prepare('SELECT measure.measure_value, measure.measure_unit, measure.date_and_time, captor.type FROM users
                                                INNER JOIN measure
                                                ON users.email = measure.email_user
                                                INNER JOIN captor
                                                ON measure.id_captor = captor.id_captor
                                                WHERE users.email = :email');
    $userListTest->execute(array('email'=>$_SESSION['email_user']));
    return $userListTest;
    }


    public function getfaq(){
        $db = $this->dbConnect();
        $faq = $db->prepare('SELECT * FROM faq ORDER BY id_faq ASC');
        $faq->execute(array($_SESSION['email_center']));
        return $faq;
    }

    public function getMessages(){
        $db = $this->dbConnect();
        $userListTest= $db->prepare('SELECT * FROM message
                                                WHERE email_user = ?
                                                ORDER BY date_and_time ASC');
        $userListTest->execute(array($_SESSION['email_user']));
        return $userListTest;
    }

    public function addAMessage($message_content, $type_problem){
        $db = $this->dbConnect();
        $newMessage = $db ->prepare('INSERT INTO message(email_center, email_user, message_content, autor, type_problem, date_and_time)
                                                VALUES(?, ?, ?, ?, ?, NOW())');
        $affectedLines = $newMessage -> execute(array($_SESSION['email_center'], $_SESSION['email_user'], $message_content, $_SESSION['email_user'], $type_problem));
        return $affectedLines;
    }

    public function addAMessageInForum($text){
        $db = $this->dbConnect();
        $newMessageForum = $db ->prepare('INSERT INTO message_forum(text, email_user, email_center, date_and_time, id_forum)
                                                VALUES(?, ?, ?, NOW(), ?)');
        $affectedLines = $newMessageForum -> execute(array($text, $_SESSION['email_user'], $_SESSION['email_center'], 1));
        return $affectedLines;
    }

    public function getMessagesForum(){
        $db = $this->dbConnect();
        $messagesForum= $db->prepare('SELECT message_forum.text,  message_forum.date_and_time, users.first_name
                                                FROM message_forum
                                                INNER JOIN users
                                                ON message_forum.email_user = users.email
                                                WHERE message_forum.id_forum = ?
                                                ORDER BY date_and_time ASC');
        $messagesForum->execute(array(1));
        return $messagesForum;
    }

    public function updateProfil($info, $edit){
        $db = $this->dbConnect();
        if($info == "firstName"){
            $update = $db->prepare('UPDATE users SET first_name = ? WHERE email= ?');
            $update->execute(array($edit,$_SESSION['email_user']));
            if ($update == true) {
                $_SESSION['first_Name'] = $edit;
            }
        } elseif ($info == "lastName"){
            $update = $db->prepare('UPDATE users SET last_name = ? WHERE email= ?');
            $update->execute(array($edit,$_SESSION['email_user']));
            if ($update == true) {
                $_SESSION['last_Name'] = $edit;
            }
        } elseif ($info == "email"){
            $update = $db->prepare('UPDATE users SET email = ? WHERE email= ?');
            $update->execute(array($edit,$_SESSION['email_user']));
            if ($update == true) {
                $_SESSION['email_user'] = $edit;
            }
        } elseif ($info == "password"){
            $update = $db->prepare('UPDATE users SET password = ? WHERE email= ?');
            $update->execute(array($edit,$_SESSION['email_user']));
        }
        return $update;
    }
}