<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/19/16
 * Time: 9:47 AM
 */

class Controller {

    protected function model($model) {
        require_once '../app/models/' . $model . '/' . $model . '.php';
        return new $model();
    }

    protected function view($view, $data = []) {
        require_once '../app/views/' .  $view . '.php';
    }

}