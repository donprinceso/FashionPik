<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *
 * @author ServerLand
 */
class Pages extends Controller
{
    protected $Page;
    public function __construct(Type $var = null) {
        $this->Page = $this->model('Page');
    }

    public function index($name)
    {
        $user = $this->Page;
        $user->name = $name;
        $this->view('home/index',['name' => $user->name]);
    }

    public function about()
    {
        $this->view('home/about');
    }

}
