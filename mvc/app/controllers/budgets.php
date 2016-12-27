<?php

class Budgets extends Controller
{

    public function index()
    {
        if (isset($_SESSION['username'])) {
            $this->view('budgets/index');
        } else {
            $this->view('auth/login');
        }
    }

}
