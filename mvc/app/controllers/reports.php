<?php

class Reports extends Controller {

    public function index()
    {
        if (isset($_SESSION['username'])) {
            $this->view('reports/index');
        } else {
            $this->view('auth/login');
        }
    }
}

