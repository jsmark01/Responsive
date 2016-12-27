<?php

class Home extends Controller {

    public function home()
    {
        if (isset($_SESSION['username'])) {
            $this->view('home/home');
        } else {
            $this->view('home/index');
        }
    }

    public function index()
    {
        if (isset($_SESSION['username'])) {
            $this->view('home/home');
        } else {
            $this->view('home/index');
        }
    }
}