<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/20/16
 * Time: 9:22 AM
 */

class Auth extends Controller {

    public function index() {
        $this->view('auth/index');
    }

    public function login() {
        $this->view('auth/login');
    }

    public function validate() {
        if (!empty($_POST['username']) && !empty($_POST['password']) ) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $model = $this->model('Authenticate');
            $valid = $model->valid($username, $password);

            if ($valid == 1) {
                $this->view('home/home', ['username' => $username]);
            } else {
                $this->view('auth/login', ['error' => 'authentication failed.']);
            }
        }

    }

}