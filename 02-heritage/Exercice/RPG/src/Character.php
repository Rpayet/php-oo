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

        public function rangedAttack()
        {
            
            return '';
        }

        public function castSpell()
        {
            return '';
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