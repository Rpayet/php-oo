<?php

    class Character {

        public $name;
        private $hp = 100;
        protected $ap = 10;
        protected $mp = 10;
        protected $inventory = [];
        protected $level = 0;
        protected $experience = 0;
        

        public function __construct($name)
        {
            $this->name = $name;
        }

        // Méthodes de combat

        public function getHp() 
        {
            return $this->hp;
        }

        public function attack(Character $target) 
        {
            $damage = $this->ap * 2;

            foreach ($this->inventory as $item) {
                if ($item instanceof Equipement && $item->name === 'Sword') 
                {
                    $damage *= 1.5;
                }
            }

            $target->takeDamage($damage);

            if($target->getHp() === 0) 
            {
                $this->increaseExperience();
            }

            return $damage;
        }

        public function rangedAttack(Character ...$targets) 
        {
            if ($this instanceof Hunter) {

                foreach ($targets as $target) {
                    $damage = floor(($this->ap * 3) / count($targets));
                    $target->takeDamage($damage);
                }

                if($target->getHp() === 0) 
                {
                    $this->increaseExperience();
                }
                return $damage;
    
            } else {
                return 0;
            }
        }

        public function castSpell(Character $target)
        {
            if ($this instanceof Magus) 
            {
                $damage = $this->mp * 3;
                $target->takeDamage($damage);

                if($target->getHp() === 0) 
                {
                    $this->increaseExperience();
                }

                return $damage;

            } else {
                return 0;
            }
        }

        protected function takeDamage($damage)
        {
            $this->hp -= $damage;

            foreach($this->inventory as $item) 
            {
                if ($item instanceof Equipement && $item->name === 'Shield')
                {
                    $damage /= 2;
                }
            }
            if ($this->hp < 0) {
                $this->hp = 0;
            }
        }

        // Méthodes d'inventaire

        public function getInventory() 
        {
            return $this->inventory;
        }

        public function pick($item) 
        {
            $limit = 3; 
            
            if (count($this->inventory) < $limit ) {
                $this->inventory[] = $item;
                return 'Objet ajouté à l\'inventaire';
            }                     

            return 'Inventaire plein';
        }
        
        public function use($item)  
        {
            $index = array_search($item, $this->inventory);
            if ($index !== false) 
            {
                if ($item instanceof Potion) {
                    $restore = $item->heal();
                    $this->hp += $restore; // Vérifier que ça ne dépasse pas le max de HP du perso.
                    if ($this->hp > 100) {
                        $this->hp = 100;
                    }
                    unset($this->inventory[$index]);
                    return 'HP restauré de '.$restore.'pts';

                } 
            }

            return 'Objet non-conforme';
        }


        // Méthodes de progression de niveau

        public function getLevel() 
        {
            return $this->level;
        }

        public function getExperience() 
        {
            return $this->experience;
        }

        protected function increaseExperience()
        {
            $this->experience++;

            if ($this->experience >= 3 + $this->level) 
            {
                $this->level++;
                $this->experience = 0;
                echo $this->name.' atteint le niveau '.$this->level.' !'."\n";
            }
        }

    }

?>