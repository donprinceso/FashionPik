<?php

    function getErrors()
    {
        if(\count($errors)> 0){
            foreach ($errors as $error) {
               return $error;
            }
        }
    }
