<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CouchdbConnectionClass
 *
 * @author Nana Aba
 */
require_once 'lib/couch.php';
require_once 'lib/couchClient.php';
require_once 'lib/couchDocument.php';
class CouchdbConnectionClass {
    
    //put your code here
    
    
    public function connecttodatabase($dbname) {
        
    $serveraddress = 'http://127.0.0.1:5984/';
        // set a new connector to the CouchDB server
       $client = new couchClient ($serveraddress,$dbname);
 
       return $client;
    }
}
