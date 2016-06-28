<?php

session_start();

require_once 'CouchdbConnectionClass.php';
require_once './MembershipClass.php';

require_once 'lib/couch.php';
require_once 'lib/couchClient.php';
require_once 'lib/couchDocument.php';
//$client = new couchClient("http://127.0.0.1:5984/", "shelf");

if (isset($_POST['membername'])) {

    $member_name = $_POST['membername'];
    $school_name = $_POST['school_name'];
    if ($school_name == 'other') {
        $school_name = $_POST['otherschool'];
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_member = new MembershipClass();
    $new_member->registermember($school_name, $member_name, $email, $password);

    $new_library = new CouchdbConnectionClass();

    $shelfdb = $new_library->connecttodatabase('members');
    $key = array($memberId, $resourceid);

    $doc = new stdClass();
    $doc->school_name = $school_name;
    $doc->name = $member_name;
    $doc->email = $email;
    $doc->password = md5($password);
    $doc->date_registered = strtotime(date("l jS \of F Y h:i:s A"));

    //saving document to couch
    $shelfdb->storeDoc($doc);
}