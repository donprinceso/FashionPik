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

    public function index()
    {
        $this->view('home/index');
    }

    public function about()
    {
        $this->view('home/about');
    }

    public function contact()
    {
        $this->view('home/contact');
    }
    public function features()
    {
        $this->view('home/features');
    }
}
