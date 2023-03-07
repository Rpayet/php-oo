<?php

use M2i\Mvc\App;

require __DIR__.'/../vendor/autoload.php';

$app = new App();

// dump([1, 2, 3, $app]);

// dump(collect([1, 2, 3, 4])->sum());

// On va définir toutes les routes / pages ici
$app->addroutes([
    ['GET', '/', 'HomeController@index'],
    ['GET', '/les-films', 'MovieController@index'],

]);

$app->run();

?>