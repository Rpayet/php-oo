<?php

namespace Book\Mvc\Model;

class Book extends Model
{
    public $id_book;
    public $title;   
    public $author;
    public $released_at;
    public $isbn;
    public $price_et;
    public $cover;

    public function cover()
    {
        return '/uploads/'.$this->cover;
    }

}

?>