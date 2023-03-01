<?php

require __DIR__.'/Cat.php';


// Un objet (instance de classe)
$bianca = new Cat();
$bianca->name = 'Bianca';

$mina = new Cat();

var_dump($bianca);
var_dump($mina);
?>