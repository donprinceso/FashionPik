<?php

  
 $request = urldecode(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

 switch ($request) {
     case '/':
         require_once __DIR__.'/public/index.php';
         break;
     case '':
         require_once __DIR__.'/public/index.php';
         break;
     default:
         http_response_code(404);
         require_once __DIR__.'/public/404.php';
         break;
 } 
   