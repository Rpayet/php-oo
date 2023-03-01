<?php

    class Calculator 
    {
        private $value;
        private $default = 0;

        public function __construct($default)
        {
            $this->default = $default;
        }

        public function add($value) 
        {
            return $this->default += $value;
        }

        public function substract($value) 
        {
            return $this->default -= $value;
        }
    }
?>