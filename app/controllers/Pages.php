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
        $this->ProductModel = $this->model('Product');
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
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if(isset($_POST['features'])){
                $data = $this->ProductModel->findAll();
                $this->view('users/features',$data);
            }
       }else{
           $data = [];
           $this->view('home/features',$data);
       }
        
    }
}
