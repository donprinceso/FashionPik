<?php
  class Redirect{
    public function to($location){
        echo SITE_URL;
        header('location:'.SITE_URL.''.$location);
    }
  }