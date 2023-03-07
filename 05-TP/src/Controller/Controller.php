<?php

namespace Book\Mvc\Controller;

abstract class Controller
{

    public function render($template, $data = [])
    {
        foreach($data as $variable => $value) {
            $$variable = $value;
        }
        require __DIR__.'/../../templates/'.$templates;
    }

}


?>