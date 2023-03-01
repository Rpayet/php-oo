<?php

    class Car
    {
        
        private $wheels = 4;
        private $color;
        private $brand;
        private $serie;
        private $gasMeter;

        public function __construct($brand, $serie) 
        {

            $this->brand = $brand;
            $this->serie = $serie;
        }

        public function getGas() 
        {
            return $this->gasMeter;
        }

        public function setGas($gasMeter)
        {
            $this->gasMeter = $gasMeter;
            return $this;
        }

        public function drive()
        {
            return $this->gasMeter -= 2;
        }

        public function honk() 
        {
            return ' peut klaxonner.';
        }

        public function getColor() {
            return $this->color;
        }

        public function setColor($color) {
            $this->color = $color;
            return $this;
        }



    }
?>

