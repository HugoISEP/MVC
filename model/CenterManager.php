<?php


class CenterManager extends Manager
{
    public function getCenters(){
        $db = $this->dbConnect();

        $centers = $db->query('SELECT * FROM center');
        return $centers;

}
}