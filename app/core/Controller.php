<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autoloader
 *
 * @author ServerLand
 */
class Controller {
    // load the models
    public function model($model) {
        if (file_exists(APPROOT.'/models/' . $model . '.php')) {
            require_once APPROOT.'/models/' . $model . '.php';
            return new $model;
        } else {
            die('model do not exists');
        }
    }
    
    // loading the views
    public function view($view, $data = []) {
       if (file_exists(APPROOT.'/views/' . $view . '.php')) {
            require_once APPROOT.'/views/' . $view . '.php';
           // return new $view;
        } else {
          die('View does not exist');
       }
    }

}
