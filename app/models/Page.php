<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author ServerLand
 */
class Page extends Database{

   public function __construct() {
      $this->connect();
   }
    public $name;
    protected $tablename = "Pages";
}
