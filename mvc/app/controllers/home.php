<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/19/16
 * Time: 9:26 AM
 */

class Home extends Controller {

    public function index($name = '') {
        $user = $this->model('User');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);

    }
}