<?php

use M2i\Mvc\App;

require __DIR__.'/../vendor/autoload.php';

$app = new App();

// dump([1, 2, 3, $app]);

// dump(collect([1, 2, 3, 4])->sum());

// On va définir toutes les routes / pages ici
$app->addroutes([
    // @todo Créer une page d'accueil
    //Créer un HomeController avec une méthode index
    // Cette méthode doit retourner une vue
    //Dans cette vue, on passera un paramètre qu'on affichera sur la page
    ['GET', '/', 'HomeController@index'],
    ['GET', '/les-films', 'MovieController@index'],
    ['GET', '/film/[i:id]?', 'MovieController@show'],
    ['GET', '/film/nouveau', 'MovieController@create'],

]);

$app->run();

?>