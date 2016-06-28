<?php

session_start();
require_once 'LibraryClass.php';
require_once 'CouchdbConnectionClass.php';

require_once 'lib/couch.php';
require_once 'lib/couchClient.php';
require_once 'lib/couchDocument.php';
//$client = new couchClient("http://127.0.0.1:5984/", "shelf");

if (isset($_POST['resourceid'])) {

    $resourceid = $_POST['resourceid'];
    $resourceTitle = $_POST['title'];
    $resourceType = $_POST['type'];
    $resourceDesc = $_POST['desciption'];
    $memberId = 'gfcuudrt7tyjyyu4jcf';
    $lib = new LibraryClass();
    $lib->addtomylibrary($resourceid, $resourceTitle, $resourceType, $resourceDesc);
   
    
    $new_library = new CouchdbConnectionClass();
    $shelfdb = $new_library->connecttodatabase('shelf');
    $key = array($memberId, $resourceid);
    $shelfview = $shelfdb->include_docs(TRUE)->key($key)->getView('api', 'shelf_member_resource');
    if (sizeof($shelfview->rows) > 0) {
     //   echo 'already exst';
    } else {
        $doc = new stdClass();
        $doc->kind = 'shelf';
        $doc->resoucreId = $resourceid;
        $doc->dateAdded = strtotime(date("l jS \of F Y h:i:s A"));
        $doc->memeberId = $memberId;
        $doc->resourceTitle = $resourceTitle;
        $doc->resourceType = $resourceType;
        $doc->resourceDesc = trim($resourceDesc);
//    //saving document to couch
        $shelfdb->storeDoc($doc);
       // echo 'inserted';
    }
}