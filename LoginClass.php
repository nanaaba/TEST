<?php

session_start();
require_once ('NotificationClass.php');
require_once ('databaseConnection.php');

class LoginClass {

    //put your code here
    public function login($school_name,$email, $password) {
        $new_connection = new databaseConnection();
        $new_connection->connectToDatabase();
        $new_connection->selectDatabase();
        $password = md5($password);
        $query = mysql_query("SELECT * FROM members WHERE email='$email' AND password='$password' AND school_id='".  trim($school_name)."'");
        if ($query) {
            if (mysql_num_rows($query) > 0) {

                $_SESSION['user_id'] = mysql_result($query, 0, 'id');
                $_SESSION['name'] = mysql_result($query, 0, 'name');
                $message = 'User Logged In successfully ';
                $notification = new NotificationClass();
                $notification->successMessage($message);
                ?>
                <script type="text/javascript">
                    window.location = 'resources.php';
                </script>
                <?php

            } else {
                $message = 'Incorrect user login credentials  ' . mysql_error();
                $notification = new NotificationClass();
                $notification->errorMessage($message);
            }
        } else {
            $error = 'Unable to login' . mysql_error();
        }
    }

}
