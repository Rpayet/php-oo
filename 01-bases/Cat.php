<?php

class Cat 
{

    public $name;
    public $type = 'Européen'; //Same
    private $fur;
    private $isChipped = false;

    public function __construct($name, $type = 'Européen', ) // type Same
    {
        // Le constructeur est appelé quand on crée un chat.
        // $this représente l'objet qui vient d'être créé.
        // Ici, on initialise les données de l'objet
        $this->name = $name;
        $this->type = $type;
    }


    /**
     * Getter qui permet d'accéder à une propriété privée
     */
    public function getFur()
    {
        return $this->fur;
    }

    /**
     * Setter permet de modifier une propriété privée
     */
    public function setFur($fur) {
        $this->fur = $fur;
        return $this;
    }

    

    public function cry() 
    {
        return 'Miaou ! par '.$this->name;
    }


    /**
     * Setter custom
     */
    public function chipWithDoctor() 
    {
        $this->isChipped = true;

        return $this;
    }

}

?>