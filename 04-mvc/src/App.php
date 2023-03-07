<?php

namespace M2i\Mvc;

use AltoRouter;
use M2i\Mvc\Controller\MovieController;

class App extends AltoRouter
{

    public function run(): void
    {
        // Pour avoir un rapport d'erreur détaillé
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();

        // lancement du contrôleur
        // $controller = new MovieController();
        // $controller->index();

        // Traiter la requête avec AltoRouter
        $match = $this->match();

        if ($match) {
            // HomeController@index
            [$controller, $method] = explode('@', $match['target']); // ['MovieController', 'index']
            $controller = '\\M2i\\Mvc\\Controller\\'.$controller;
            $controller = new $controller();
            $controller->$method(... $match['params']);
            
        } else {
            http_response_code(404);
            require __DIR__.'/../templates/404.html.php';
        }
    }
}

?>