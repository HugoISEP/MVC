<?php


class AdminManager extends Manager {
    function getAdmin(){
        $db = $this->dbConnect();

        $center = $db->prepare('SELECT * from admin WHERE email=?');
        $center->execute(array($_SESSION['email_admin']));
        return $center;
    }

    function getCenters(){
        $db = $this->dbConnect();

        $listcenters = $db->query('SELECT * FROM center');
        return $listcenters;
    }

}