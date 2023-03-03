<?php

    class Character {

        protected $name;
        private $hp = 100;
        protected $ap = 10;
        protected $mp = 10;
        

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function attack(Character $target) 
        {
            $damage = $this->ap * 2;
            $target->takeDamage($damage);
            return $damage;
        }

        public function rangedAttack(Character ...$targets) 
        {
            if ($this instanceof Hunter) {

                foreach ($targets as $target) {
                    $damage = floor(($this->ap * 3) / count($targets));
                    $target->takeDamage($damage);
                }

            } else {
                return 0;
            }
        }

        public function castSpell(Character $target)
        {
            if ($this instanceof Magus) {
                $damage = $this->mp * 3;
                $target->takeDamage($damage);
            } else {
                return 0;
            }
        }

        protected function takeDamage($damage)
        {
            $this->hp -= $damage;
            if ($this->hp < 0) {
                $this->hp = 0;
            }
        }

        
    
    }

?>