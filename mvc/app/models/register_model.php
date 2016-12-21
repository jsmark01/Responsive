<?php

 include_once("dbconnection.php");

class register_model extends dbconnection
{

    public function __construct() {
        $this->db = new dbconnection();
    }

    public function user_exists($username, $email) {
        $sth = $this->db->prepare("Select count(*) FROM users WHERE UR_USER_NAME = ? OR UR_EMAIL = ? ");
        $sth->execute(array($username, $email));
        if ($sth->rowCount() == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function user_create(string $username, string $email, string $password) {
        if(isset($username, $password, $email)) {
            $sth = $this->db->prepare("INSERT INTO users VALUES (NULL, ?, ?, ?)");
            $sth->execute(array($username, $email, $password));
        }
    }


}


$me = new register_model();
echo $me->user_create('bob', 'bob@this.com', 'thispass');