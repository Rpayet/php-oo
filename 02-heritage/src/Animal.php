<?php

    abstract class Animal 
    {
        protected $name;
        private $type;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function move() 
        {
            return $this->name.' se déplace';
        }
    }

    
?>