<?php
    class Item 
    {
        public $name;
        private $modifier;

        public function __construct($name) 
        {
            $this->name = $name;
        }

        public function heal($heal) 
        {
            $this->modifier = $heal;
            return $this;
        }

        public function powerUp($power)
        {
            $this->modifier = $power;
            return $this;
        }

    }
?>