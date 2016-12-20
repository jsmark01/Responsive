<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/20/16
 * Time: 1:19 PM
 */

class Authenticate {

    public function valid($username, $password) {
        if ($username == 'bob' & $password == 'pass') {
            return true;
        } else {
            return false;
        }

    }


}