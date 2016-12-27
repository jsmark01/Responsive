<?php

class Categories extends Controller
{

    public function index()
    {
        if (isset($_SESSION['username'])) {
            $this->view('categories/index');
        } else {
            $this->view('auth/login');
        }
    }
}

