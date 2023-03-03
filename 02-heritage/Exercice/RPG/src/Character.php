<?php

    class Character {

        protected $name;
        private $hp = 100;
        protected $ap = 10;
        protected $mp = 10;
        protected $inventory = [];
        

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function getHp() 
        {
            return $this->hp;
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

        public function getInventory() 
        {
            return $this->inventory;
        }

        public function pick(Item ...$items) 
        {
            $limit = 3; 
            if (count($this->inventory) < $limit ) 
            {
                foreach ($items as $item)
                {
                    if (count($this->inventory) < $limit ) {
                        $this->inventory[] = $item;
                    }                     
                }
                return (count($items) > $limit ) ? 'Objets ajoutés à l\'inventaire' : 'Objet ajouté à l\'inventaire';
            }

            return 'Inventaire plein';
        }
        
        public function use() 
        {

        }

    }

?>