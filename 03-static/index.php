<?php

// Require toutes les classes d'un seul coup

use M2i\F1\Formula;

spl_autoload_register(function($class){

    //M2i\F1 correspond à src
    $class = str_replace('M2i\\F1\\', '', $class);

    require __DIR__.'/src/'.$class.'.php';
});

$f1 = new Formula('F1');
var_dump($f1);

?>