<?php
    class Item 
    {
        protected $name;
        private $modifier;

        public function __contruct($name) 
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