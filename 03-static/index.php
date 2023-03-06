<?php

// Require toutes les classes d'un seul coup

use M2i\F1\Formula;
use M2i\F1\DB;

spl_autoload_register(function($class){

    //M2i\F1 correspond à src
    $class = str_replace('M2i\\F1\\', '', $class);

    require __DIR__.'/src/'.$class.'.php';
});

$f1 = new Formula('F1');
echo Formula::$count."<br>";

$f2 = new Formula('F2');
$f3 = new Formula('F3');
echo Formula::$count."<br>";
echo Formula::howMany()."<br>";

var_dump($f1, $f2, $f3);

// Exercice DB Static

DB::select('SELECT * FROM movie');
var_dump($movie);

?>