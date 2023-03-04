<?php

class Potion extends Item 
{

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function heal() 
    {
        return rand(50, 70);
        
    }

}

?>
