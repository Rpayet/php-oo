<?php
    class Item 
    {
        public $name;
        private $modifier;

        public function __construct($name) 
        {
            $this->name = $name;
        }

        public function powerUp($power)
        {
            $this->modifier = $power;
            return $this;
        }

    }
?>