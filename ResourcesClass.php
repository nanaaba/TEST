<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResourcesClass
 *
 * @author Nana Aba
 */
require_once './databaseConnection.php';
require_once './NotificationClass.php';

class ResourcesClass {

    //put your code here

    public function basicsearch($doctype, $searchval) {
        $connection = new databaseConnection(); //i created a new object
        $connection->connectToDatabase(); // connected to the database
        $connection->selectDatabase();
        if ($doctype == 'all') {
            $query = mysql_query("SELECT * FROM  resources  WHERE classification_number LIKE '%" . trim($searchval) . "%' OR author LIKE '%" . trim($searchval) . "%' OR publisher LIKE '%" . trim($searchval) . "%' OR date_published LIKE '%" . trim($searchval) . "%'
OR description LIKE '%" . trim($searchval) . "%' OR keywords LIKE '%" . trim($searchval) . "%' OR target_group LIKE '%" . trim($searchval) . "%' OR language LIKE '%" . trim($searchval) . "%' OR thematic_area LIKE '%" . trim($searchval) . "%' OR subject LIKE '%" . trim($searchval) . "%'
OR grade LIKE '%" . trim($searchval) . "%'");
        } else {
            $query = mysql_query("SELECT * FROM  resources  WHERE classification_number LIKE '%" . trim($searchval) . "%' OR author LIKE '%" . trim($searchval) . "%'  OR publisher LIKE '%" . trim($searchval) . "%' OR date_published LIKE '%" . trim($searchval) . "%'
OR description LIKE '%" . trim($searchval) . "%' OR keywords LIKE '%" . trim($searchval) . "%' OR target_group LIKE '%" . trim($searchval) . "%' OR language LIKE '%" . trim($searchval) . "%' OR thematic_area LIKE '%" . trim($searchval) . "%' OR subject LIKE '%" . trim($searchval) . "%'
OR grade LIKE '%" . trim($searchval) . "%' AND type = '" . $doctype . "'");
        }
        if ($query) {
            $feedback = $query;
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
