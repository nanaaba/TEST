<?php

/**
 * Created by PhpStorm.
 * User: aba.esuon
 * Date: 11/03/2016
 * Time: 12:14
 */
class NotificationClass {

    public function successMessage($message) {
        print ' <div class="alert dark alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>' .
                $message
                . '</div>';
    }

    public function errorMessage($message) {
        print '<div class="alert dark alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>' .
                $message
                . '</div>';
    }

}
