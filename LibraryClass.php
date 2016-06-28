<?php

session_start();
require_once './databaseConnection.php';
require_once './NotificationClass.php';

class LibraryClass {

    //put your code here

    public function addtomylibrary($resourceid, $title, $type, $description) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();
        $member_id = $_SESSION['user_id'];
        $rows = $this->checkexistenceoflibrary($resourceid);
        if ($rows > 0) {
            echo '2';
        } else {
            $timeadded = time();
            $dateposted = date("l jS \of F Y h:i:s A");
            $query = mysql_query("INSERT INTO shelf VALUES ('','" . trim($member_id) . "','" . trim($resourceid) . "','" . trim($type) . "','" . trim($title) . "','" . trim($description) . "','" . trim($dateposted) . "','" . trim($timeadded) . "')");
            if ($query) {
                echo '0';
            }
        }
    }

    private function checkexistenceoflibrary($resourceid) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();
        $member_id = $_SESSION['user_id'];

        $query = mysql_query("SELECT * FROM shelf WHERE member_id =$member_id AND resource_id=$resourceid");
        if ($query) {
            $num = mysql_numrows($query);
        } else {
            echo '1' . mysql_error();
        }
        return $num;
    }

    public function userlibrary($type) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();
        $member_id = $_SESSION['user_id'];
        if ($type == 'all') {
            $query = mysql_query("SELECT * FROM user_library WHERE member_id =$member_id");
        } else {
            $query = mysql_query("SELECT * FROM user_library WHERE member_id =$member_id AND resource_type='" . trim($type) . "'");
        }

        if ($query) {
            $feedback = $query;
        }
        return $feedback;
    }

}
