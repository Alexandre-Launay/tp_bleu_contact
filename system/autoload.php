<?php

include "system/Conf.php";

spl_autoload_register(function ($class_name) {

    foreach(Conf::$modules as $module){
        if(file_exists("{$module}/" . $class_name . '.php')){
            include_once "{$module}/" . $class_name . '.php';
        }
    }

});