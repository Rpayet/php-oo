<?php

namespace Book\Mvc\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render('home.html.php', [
            'firstname' => 'Toutou',

        ]);
    }
}

?>