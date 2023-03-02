<?php

    class Calculator 
    {
        private $default = 0;

        public function add($value) 
        {
            $this->default += $value;

            return $this;
        }

        public function substract($value) 
        {
            $this->default -= $value;
            
            return $this;
        }

        public function multiply($value) 
        {
            $this->default *= $value;
            
            return $this;
        }

        public function divide($value) 
        {
            $this->default /= $value;

            return $this;
    
        }

        public function result() {

            return $this->default;
            
        }
    }
?>