<?php

    class Library 
    {
        private $books = [];


        public function addBook($book)
        {
            return $this->books[] = $book;;
        }

        public function addBooks($books) 
        {
            foreach ($books as $book) 
            {
                $this->addBook($book);
            }
        }

        public function books() 
        {
            return $this->books;
        }

        public function count() 
        {
            return count($this->books);
        }

        public function totalPages()
        {
            $totalPages = 0;
            foreach ($this->books() as $book)
            {
                $totalPages += $book->countPages();
            }
            return $totalPages;
        }

        public function getBook($title) {

            foreach ($this->books() as $book)
            {
                if ($book->getname($title) === $title) {
                    return $book;
                }
            }
            
        }

        public function findBooksByLetter($letter) {
            return array_filter($this->books(), function(Book $book) use ($letter) 
            {
                return substr($book->getName(), 0, 1) === $letter;
            });
        }

        public function randomBook()
        {
            if (empty($this->books)) 
            {
                return null;
            }

            return $this->books[array_rand($this->books)];
        }
    }

?>