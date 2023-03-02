<?php
    class Kennel 
    {
        private $animals = [];

        /**
         * Le polymorphisme, c'est un pbjet qui prend la forme de plusieurs classes. 
         */

        public function keep(Animal $animal) 
        {
            $this->animals[] = $animal;
            
            return $this;
        }
    }

?>