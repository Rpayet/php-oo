<?php

// Require toutes les classes d'un seul coup

use M2I\F1\Formula;

spl_autoload_register('src/');

$f1 = new Formula('F1');
var_dump($f1);

?>