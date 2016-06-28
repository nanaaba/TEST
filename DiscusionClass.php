<?php

session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DiscusionClass
 *
 * @author Nana Aba
 */
require_once './databaseConnection.php';
require_once './NotificationClass.php';

class DiscusionClass {

    //put your code here
    public function setpost($title, $message) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();
        $timeadded = time();
        $dateposted = date("l jS \of F Y h:i:s A");
        $query = mysql_query("INSERT INTO posts VALUES ('','" . trim($title) . "','" . trim($message) . "','" . trim($dateposted) . "','" . trim($timeadded) . "')");
        if ($query) {
            $post_id = mysql_insert_id();
            $this->setdiscussioncommentns($post_id, 'this user created this discussion');
            $message = 'new discussion posted successfully';
            $notification = new NotificationClass();
            $notification->successMessage($message);
        } else {
            $message = 'Error in posting  discssiion' . mysql_error();
            $notification = new NotificationClass();
            $notification->errorMessage($message);
        }
    }

    public function getdiscussiondetail($post_id) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM posts  WHERE id=$post_id");
        if ($query) {
            $feedback = $query;
        } else {
            $message = 'Error in posting  discssiion' . mysql_error();
            $notification = new NotificationClass();
            $notification->errorMessage($message);
        }
        return $feedback;
    }

    public function getdiscussioncomments($post_id) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM user_discussions  WHERE discusson_id=$post_id");
        //echo "SELECT * FROM user_discussions  WHERE discusson_id=$post_id";
        if ($query) {
            $feedback = $query;
        } else {
            $message = 'Error in posting  discssiion' . mysql_error();
            $notification = new NotificationClass();
            $notification->errorMessage($message);
        }
        return $feedback;
    }

    public function setdiscussioncommentns($post_id, $message) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();

        $user_id = $_SESSION['user_id'];
        $dateposted = date("l jS \of F Y h:i:s A");
        $timeadded = time();
        $query = mysql_query("INSERT INTO discussion_comments VALUES ('','" . trim($post_id) . "','" . trim($user_id) . "','" . trim($message) . "','" . trim($dateposted) . "','" . trim($timeadded) . "')");
        if ($query) {
            
        } else {
            
        }
    }

    public function getuserjoineddiscussions() {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();

        $user_id = $_SESSION['user_id'];

        $query = mysql_query("SELECT distinct(D.discusson_id),P.title,P.message,P.date , (select count(*) from discussion_comments where discussion_comments.discusson_id=P.id) as total_comments FROM discussion_comments D left join posts P on  D.discusson_id= P.id  WHERE D.user_id =$user_id");
        if ($query) {
            $feedback = $query;
        } else {
            $message = 'Error in posting  discssiion' . mysql_error();
            $notification = new NotificationClass();
            $notification->errorMessage($message);
        }
        return $feedback;
    }

    public function getongoingdiscussions() {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();

        $user_id = $_SESSION['user_id'];

        $query = mysql_query("SELECT distinct(D.discusson_id),P.title,P.message,P.date, (select count(*) from discussion_comments where discussion_comments.discusson_id=P.id) as total_comments FROM discussion_comments D,posts P WHERE (select count(*) from discussion_comments where discusson_id = D.discusson_id and user_id = $user_id) < 1 and  D.discusson_id= P.id");
        if ($query) {
            $feedback = $query;
        } else {
            $message = 'Error in retreiving going  discssiion' . mysql_error();
            $notification = new NotificationClass();
            $notification->errorMessage($message);
        }
        return $feedback;
    }

    public function getalldiscussions() {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();
        $user_id = $_SESSION['user_id'];

        $query = mysql_query("SELECT distinct(D.discusson_id),P.title,P.message,P.date FROM discussion_comments D,posts P WHERE D.discusson_id= P.id AND D.user_id !=$user_id");
        if ($query) {
            $feedback = $query;
        } else {
            $message = 'Error in posting  discssiion' . mysql_error();
            $notification = new NotificationClass();
            $notification->errorMessage($message);
        }
        return $feedback;
    }

    public function displaylimitecharacters($string, $characters) {
        $string = strip_tags($string);
        if (strlen($string) > $characters) {

            // truncate string
            $stringCut = substr($string, 0, $characters);

            // make sure it ends in a word so assassinate doesn't become ass...
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
        }
        return $string;
    }

}
