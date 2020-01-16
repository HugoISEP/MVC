<?php
require_once("model/Manager.php");

class UserManager extends Manager
{
    public function testUserConnection($emailTest, $passwordTest)
    {
        define("SUFFIXE","18fa73e0");
        define("PREFIXE","47fc2ab9");
        $emailTest = htmlspecialchars($emailTest);
        $passwordTest = htmlspecialchars($passwordTest);
        $passwordTest = SUFFIXE.hash("sha256",$passwordTest).PREFIXE;

        $db = $this->dbConnect();
        try {
            $user = $db->prepare('SELECT * FROM users WHERE email = :email');
            $user->execute(array('email'=>$emailTest));
            $userData = $user->fetch();
            if ($userData['password'] == $passwordTest) {
                $_SESSION['email_user'] = $userData['email'];
                $_SESSION['email_center'] = $userData['email_center'];
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

    public function addNewClient($first_name, $last_name, $email, $email_center, $gender, $password, $phone_number, $birth, $photo){
        $db = $this->dbConnect();
        $newClient = $db ->prepare('INSERT INTO users(email, last_name, first_name, gender, birthday, phone_number, password, email_center, link_img) 
                                                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $email = htmlspecialchars($email);
        $last_name = htmlspecialchars($last_name);
        $first_name = htmlspecialchars($first_name);
        $email_center = htmlspecialchars($email_center);
        $gender = htmlspecialchars($gender);
        $password = htmlspecialchars($password);
        define("SUFFIXE","18fa73e0");
        define("PREFIXE","47fc2ab9");
        $password = SUFFIXE.hash("sha256",$password).PREFIXE;
        $phone_number = htmlspecialchars($phone_number);
        $birth = htmlspecialchars($birth);
        $name_photo = htmlspecialchars($photo['name']);
        $affectedLines = $newClient->execute(array($email, $last_name, $first_name, $gender, $birth, $phone_number, $password, $email_center, $name_photo));

        if (isset($photo['tmp_name'])) {
            $retour = copy($photo['tmp_name'], $photo['name']);
        }
            return $affectedLines;
    }

    public function addAMessage($id_message, $message_content, $type_problem, $date_and_time){
        $db = $this->dbConnect();
        $newMessage = $db ->prepare('INSERT INTO message(id_message, email_center, email_user, message_content, type_problem, date_and_time
                                                VALUES(:email_center, :email_user, :message, :message_content, :type_problem, :date_and_time))');
        $affectedLines = $newMessage -> execute(array('email_center'=>$_SESSION['email_center'],
                                                        'email_user'=>$id_message['email'],
                                                        'email_center'=>$id_message['email'],
                                                        'email_center'=>$id_message['email'],
                                                        'email_user'=>$_SESSION['email']));
    }
}