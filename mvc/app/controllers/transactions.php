<?php

class Transactions extends Controller
{

    public function index()
    {
        if (isset($_SESSION['username'])) {
            $this->view('transactions/index');
        } else {
            $this->view('auth/login');
        }
    }
}