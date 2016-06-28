<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminClass
 *
 * @author Nana Aba
 */
require_once './databaseConnection.php';
require_once './NotificationClass.php';
class AdminClass {

    //put your code here
    //put your code here
    public function settargetgroup($name) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("INSERT INTO target_group VALUES ('','" . trim($name) . "')");
        if ($query) {
            //   echo 'sucess';
        } else {
            //  echo 'error';
        }
    }

    public function gettargetgroup() {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  target_group ");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }

    public function setlanguage($name) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("INSERT INTO languages VALUES ('','" . trim($name) . "')");
        if ($query) {
            //   echo 'sucess';
        } else {
            //  echo 'error';
        }
    }

    public function getlanguages() {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  languages ORDER BY name ASC ");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }

    public function setsubjectname($name, $target_group) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("INSERT INTO subject VALUES ('',$target_group,'" . trim($name) . "')");
        if ($query) {
            //   echo 'sucess';
        } else {
            //  echo 'error';
        }
    }

    public function getsubject() {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  subjects ");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }

    public function setthematicarea($name, $target_group) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("INSERT INTO thematic_area VALUES ('',$target_group,'" . trim($name) . "')");
        if ($query) {
            //   echo 'sucess';
        } else {
            echo 'error' . mysql_error();
        }
    }

    public function getthematics() {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  thematics");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }

    public function setgrade($name, $target_group) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("INSERT INTO grade VALUES ('',$target_group,'" . trim($name) . "')");
        if ($query) {
            //   echo 'sucess';
        } else {
            echo 'error' . mysql_error();
        }
    }

    public function getgrade() {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  grades");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }

    public function getthematicsbasedontarget($target_id) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  thematic_area WHERE target_group_id=$target_id");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }

    public function getgradebasedontarget($target_id) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  grade WHERE target_group_id=$target_id");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }

    public function getsubjectbasedontarget($target_id) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  subject WHERE target_group_id=$target_id");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }

    public function setresources($classificationno,$title, $author, $publisher, $date_published, $desription, $keywords, $target_group, $language, $thematicarea, $subject, $grade, $type, $url) {
       
        $connection = new databaseConnection(); 
        $connection->connectToDatabase(); 
        $connection->selectDatabase();
        $keywords = implode(', ',$keywords);
        $language = implode(', ',$language);
        $thematicarea = implode(', ',$thematicarea);
        $subject = implode(', ',$subject);
        $grade = implode(', ',$grade);
      
        $query = mysql_query("INSERT INTO resources VALUES ('','" . trim($classificationno) . "','" . trim($title) . "','" . trim($author) . "','" . trim($publisher) . "','" . trim($date_published) . "','" . trim($desription) . "','" . trim($keywords) . "','" . trim($target_group) . "','" . trim($language) . "','" . trim($thematicarea) . "','" . trim($subject) . "','" . trim($grade) . "','" . trim($type) . "','" . trim($url) . "')");
        if ($query) {
            $message = 'resources uploaded successfully';
            $notification = new NotificationClass();
            $notification->successMessage($message);
        } else {
            $message = 'Error in uploading  resources' . mysql_error();
            $notification = new NotificationClass();
            $notification->errorMessage($message);
        }
        
    }

     public function setschool($name) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("INSERT INTO schools VALUES ('','" . trim($name) . "')");
        if ($query) {
            //   echo 'sucess';
        } else {
            //  echo 'error';
        }
    }
    
    public function getschools() {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();

        $query = mysql_query("SELECT * FROM  schools ");
        if ($query) {
            $feedback = $query;
        } else {
            
        }
        return $feedback;
    }
}
