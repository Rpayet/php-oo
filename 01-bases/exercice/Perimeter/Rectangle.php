<?php

    class Rectangle 
    {
        private $width;
        private $height;

        public function __construct ($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function perimeter() {
            
            return ($this->width + $this->height) * 2;
        }

        public function area() {
            return $this->width * $this->height;
        }

        public function isvalid() {
            
            if ($this->width <= 0 || $this->height <= 0) {
                return false;
            }
            return true;
        }
    }
?>