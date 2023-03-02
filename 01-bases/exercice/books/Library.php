<?php

    class Library 
    {
        private $books = [];


        public function addBook($book)
        {
            $this->books += $book;

            return $this;
        }

        public function addBooks() 
        {

        }

        public function books() 
        {
            return $this->books;
        }
    }

?>