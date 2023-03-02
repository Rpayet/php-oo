<?php

    class Magus extends Character
    {
        private $sag;

        public function __construct($name)
        {
            parent::__construct($name, $mp = 20);
            $this->mp = $mp;
        }
    }

?>