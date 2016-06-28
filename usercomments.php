<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './DiscusionClass.php';
if(isset($_POST['post_id'])){
    $comments = $_POST['comments'];
    $post_id =$_POST['post_id'];
   $new_comments = new DiscusionClass();
   $new_comments->setdiscussioncommentns($post_id, $comments);
}