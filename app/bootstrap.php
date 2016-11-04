<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// composer Autoloader


require_once 'config/config.php';
require_once 'config/Database.php';
require_once 'helper/Token.php';
require_once 'helper/Session.php';
require_once 'helper/Redirect.php';

// require_once 'core/Controller.php';
// require_once 'core/Router.php';

spl_autoload_register(function($className){
    require_once 'core/'.$className.'.php';
});

