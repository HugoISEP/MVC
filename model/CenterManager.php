<?php
require_once("model/Manager.php");

class CenterManager extends Manager
{
    public function getCenters(){
        $db = $this->dbConnect();

        $centers = $db->query('SELECT * FROM center');
        return $centers;
    }

    public function getCenter(){
        $db = $this->dbConnect();

        $center = $db->prepare('SELECT * from center WHERE email=?');
        $center->execute(array($_SESSION['email_center']));
        return $center;
    }

    public function getUserTests(){
        $db = $this->dbConnect();

        $listuserTests = $db->query('SELECT measure.measure_value, measure.measure_unit, users.first_name, users.last_name, measure.date_and_time, captor.type FROM users
                                                INNER JOIN measure
                                                ON users.email = measure.email_user
                                                INNER JOIN captor
                                                ON measure.id_captor = captor.id_captor
                                                ORDER BY measure.date_and_time DESC 
                                                LIMIT 15
                                                ');
        return $listuserTests;
    }
}