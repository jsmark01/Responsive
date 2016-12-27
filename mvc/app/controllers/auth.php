<?php

class Auth extends Controller {


    public function login() {
        $this->view('auth/login');
    }

    public function validate() {
        if (!empty($_POST['username']) && !empty($_POST['password']) ) {
            $username = $_POST['username'];
            $password = $_POST['password'];

           $model = $this->model('Authenticate');

          $valid = $model->validate($username, $password);
            if ($valid == 1) {
                $this->view('home/home', ['error' => $valid]);
            } else {
                $this->view('auth/login', ['error' => $valid]);
            }

        } else {
            $this->view('auth/login', ['error' => 'Please complete the form.']);
        }

    }

    public function logout() {
        session_destroy();
        $this->view('auth/login', ['error' => 'You have been logged out.']);

    }
}