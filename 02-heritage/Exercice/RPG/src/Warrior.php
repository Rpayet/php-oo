<?php

    class Warrior extends Character
    {
        public function __construct($name)
        {
            parent::__construct($name, $ap = 20);
            $this->ap = $ap;
        }        
    }

?>