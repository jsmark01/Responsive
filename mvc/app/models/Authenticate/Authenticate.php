<?php

/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/20/16
 * Time: 1:19 PM
 */


require_once('../app/config/dbconnection.php');

class Authenticate extends dbconnection

{

    public function validate($username, $password) {
//      TODO sanitize input;

        $db = new dbconnection;
        $query = $db->prepare('SELECT UR_USERNAME, UR_PASSWORD
                               FROM users
                               WHERE UR_USERNAME = :username');
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() == 1) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $hash = $result['UR_PASSWORD'];

            if (password_verify($password, $hash)) {
                session_start();
                $_SESSION["username"] = $username;
                return true;
            } else {
                return 'Authentication Failed';
            }
        } else {
            return 'User not Found';
        }
    }

/*    public function updatehash($username, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $db = new dbconnection;
        $query = $db->prepare('UPDATE users
                               SET UR_PASSWORD = :hash
                               WHERE UR_USERNAME = :username');
        $query->bindParam(':hash', $hash, PDO::PARAM_STR);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
    }*/
}

