<?php

    class Book 
    {
        private $title;
        private $pages;
        private $currentPage = 1;

        public function __construct($title, $pages)
        {
            $this->title = $title;
            $this->pages = $pages;
        }

        public function page()  
        {
            return $this->currentPage;
        }

        public function nextPage()
        {
            return ($this->currentPage > $this->pages) ? 'Dernière page' : $this->currentPage += 1;
        }

        public function close() 
        {
            $this->currentPage = 1;

            return $this;
        }

        public function getName() 
        {
            return $this->title; 
        }

        public function countPages() 
        {
            return $this->pages;
        }
    }
?>