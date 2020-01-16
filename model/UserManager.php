<?php
require_once("model/Manager.php");

class UserManager extends Manager
{
    public function testUserConnection($emailTest, $passwordTest)
    {
        $db = $this->dbConnect();
        try {
            $user = $db->prepare('SELECT password FROM users WHERE email = :email');
            $user->execute(array('email'=>$emailTest));
            $userData = $user->fetch();
            if ($userData['password'] == $passwordTest) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function GetUser()
    {
        $db = $this->dbConnect();
        $user = $db->prepare('SELECT * FROM users WHERE email = :email');
        $user->execute(array('email'=>$_SESSION['email']));

        return $user;
    }

    public function getUserListTests(){
        $db = $this->dbConnect();
        $userListTest= $db->prepare('SELECT measure.measure, measure.date_and_time, captor.type FROM users
                                                INNER JOIN measure
                                                ON users.email = measure.email_user
                                                INNER JOIN captor
                                                ON measure.id_captor = captor.id_captor
                                                WHERE users.email = :email');
    $userListTest->execute(array('email'=>$_SESSION['email']));
    return $userListTest;
    }

    public function addNewClient($first_name, $last_name, $email, $email_center, $gender, $password, $phone_number, $birth, $photo){
        $db = $this->dbConnect();
        $newClient = $db ->prepare('INSERT INTO users(email, last_name, first_name, gender, birthday, phone_number, password, email_center, link_img) 
                                                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');

        $affectedLines = $newClient->execute(array($email, $last_name, $first_name, $gender, $birth, $phone_number, $password, $email_center, $photo['name']));

        if (isset($photo['tmp_name'])) {
            $retour = copy($photo['tmp_name'], $photo['name']);
        }
            return $affectedLines;
    }

    public function addAMessage($content, $type_problem){
        $db = $this->dbConnect();
        $newMessage = $db ->prepare('INSERT INTO message()');
    }
}