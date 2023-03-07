<?php

namespace Book\Mvc\Controller;

use Book\Mvc\Model\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return $this->render('books/index.html.php', [
            'books' => $books,
        ]);
    }

    public function show($id)
    {
        $book = Book::find($id);

        if(!$book) {
            http_response_code(404);
            return $this->render('404.html.php');
        }

        return $this->render('books/show.html.php', [
            'book' => $book,
        ]);
    }

    public function create()
    {
        $book = new Book();
        $book->title= 'Machin';   
        $book->author= 'Truc';
        $book->released_at = '2019-01-05';
        $book->isbn = '1-56-46455-458-7';
        $book->price_et = 5;
        $book->cover = 'trucmachin.jpg';
        $book->save();
    }
}

?>