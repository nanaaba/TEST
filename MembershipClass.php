<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MembershipClass
 *
 * @author Nana Aba
 */
require_once './databaseConnection.php';
require_once './NotificationClass.php';

class MembershipClass {

    //put your code here

    public function registermember($school_name, $name, $email, $password) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();
        $rows = $this->checkmemberexisttence($school_name, $email);
        if ($rows > 0) {
            echo 'Email already exist .Kindly check your email or reset your password on the login page if you have forgotten your password.Thank you.';
        } else {
            $member_id = rand(0, 20);
            $dateregistered = date("F j Y ");
            $mpassowrd = md5($password);
            $query = mysql_query("INSERT INTO members VALUES ('','" . trim($member_id) . "','" . trim($school_name) . "','" . trim($name) . "','" . trim($email) . "','" . trim($mpassowrd) . "','" . trim($dateregistered) . "')");
            if ($query) {

                echo '0';
            }
        }
    }

    private function checkmemberexisttence($school_name, $email) {

        $connection = new databaseConnection();
        $connection->connectToDatabase();
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  members WHERE school_name='" . trim($school_name) . "' AND email='" . trim($email) . "'");
        if ($query) {
            $num = mysql_num_rows($query);
        }
        return $num;
    }

//    public function sendemail($to) {
//        
//        $subject = "This is subject";
//
//        $message = "<b>This is HTML message.</b>";
//        $message .= "<h1>This is headline.</h1>";
//
//        $header = "From:abc@somedomain.com \r\n";
//        $header .= "Cc:afgh@somedomain.com \r\n";
//        $header .= "MIME-Version: 1.0\r\n";
//        $header .= "Content-type: text/html\r\n";
//
//        $retval = mail($to, $subject, $message, $header);
//
//        if ($retval == true) {
//            echo "Message sent successfully...";
//        } else {
//            echo "Message could not be sent...";
//        }
//    }
}
