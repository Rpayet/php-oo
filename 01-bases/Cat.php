<?php

class Cat 
{

    public $name;
    private $type = 'Européen'; //Same
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


    public function getType()
    {
        return $this->type;
    }

    public function setType($type) 
    {
        $this->type = $type;

        return $this;
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
     * Permet de joeur avec un autre chat
     * On peut typer les arguments avec le nom d'une classe
     * pour forcer cet arguùent à être un Cat.
     */
    public function playWith(Cat $otherCat)
    {
        return $this->name.' joue avec '.$otherCat->name;
    }

    /**
     * Getter custom
     */

    public function chippedInformation() 
    {
        if ($this->isChipped) {
            return $this->name.' est pucé(e).';
        }

        return $this->name.' n\'est pas pucé(e).';
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