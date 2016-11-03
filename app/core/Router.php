<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Router{
    protected $controller = 'Pages';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        if (file_exists(APPROOT.'/controllers/' .ucwords($url[0]). '.php')) {
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }
        require_once APPROOT.'/controllers/' . $this->controller . '.php';
        //$this->controller = 'app'.'\\'. 'Controllers' .'\\' .$this->controller;
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}
