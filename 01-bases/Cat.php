<?php

class Cat 
{

    public $name;
    public $type = 'Européen'; //Same
    public $fur;

    public function __construct($name, $type = 'Européen', ) // type Same
    {
        // Le constructeur est appelé quand on crée un chat.
        // $this représente l'objet qui vient d'être créé.
        // Ici, on initialise les données de l'objet
        $this->name = $name;
        $this->type = $type;
    }

    public function cry() 
    {
        return 'Miaou ! par '.$this->name;
    }

}

?>