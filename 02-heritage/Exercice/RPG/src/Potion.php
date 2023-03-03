<?php

class Potion extends Item {

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function heal($character) 
    {
        $heal = rand(floor($character->getHp() * 0.5), floor($character->getHp() * 0.7));
        $character->heal($heal);
    }

}

?>
