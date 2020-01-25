<?php


class ConnectionManager extends Manager
{

    public function testUserConnection($emailTest, $passwordTest){

        $db = $this-> dbConnect();
        define("SUFFIXE","18fa73e0");
        define("PREFIXE","47fc2ab9");
        $emailTest = htmlspecialchars($emailTest);
        $passwordTest = htmlspecialchars($passwordTest);
        $passwordTest = SUFFIXE.hash("sha256",$passwordTest).PREFIXE;

        $user = $db->prepare('SELECT * FROM admin WHERE email = :email');
        $user->execute(array('email'=>$emailTest));
        $userData = $user->fetch();
        if ($userData['password'] == $passwordTest) {
            $_SESSION['email_admin'] = $userData['email'];
            $_SESSION['name'] = $userData['name'];
            $_SESSION['userType'] = 'admin';
            return true;
        }

        $user = $db->prepare('SELECT * FROM center WHERE email = :email');
        $user->execute(array('email'=>$emailTest));
        $userData = $user->fetch();
        if ($userData['password'] == $passwordTest) {
            $_SESSION['email_center'] = $userData['email'];
            $_SESSION['name'] = $userData['name'];
            $_SESSION['userType'] = 'center';
            return true;
        }

        $user = $db->prepare('SELECT * FROM users WHERE email = :email');
        $user->execute(array('email'=>$emailTest));
        $userData = $user->fetch();
        if ($userData['password'] == $passwordTest) {
            $_SESSION['email_user'] = $userData['email'];
            $_SESSION['email_center'] = $userData['email_center'];
            $_SESSION['first_Name'] = $userData['first_name'];
            $_SESSION['last_Name'] = $userData['last_name'];
            $_SESSION['password'] = $userData['password'];
            $_SESSION['birthday'] = $userData['birthday'];
            $_SESSION['phone_number'] = $userData['phone_number'];
            $_SESSION['userType'] = 'user';
            return true;
        }
        return false;

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


}