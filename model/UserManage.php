<?php


class UserManage
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
        $userListTest= $db->prepare('SELECT measure.measure, test.type FROM users
                                                INNER JOIN measure
                                                ON users.email = measure.email
                                                WHERE email = :email');
    $userListTest->execute(array('email'=>$_SESSION['email']));
    return $userListTest;
    }


    private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=moduloheart;charset=utf8', 'root', '');
        return $db;
    }
}