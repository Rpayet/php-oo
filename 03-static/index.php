<?php

// Require toutes les classes d'un seul coup

use M2i\F1\Formula;
use M2i\F1\DB;

spl_autoload_register(function($class){

    //M2i\F1 correspond à src
    $class = str_replace('M2i\\F1\\', '', $class);

    require __DIR__.'/src/'.$class.'.php';
});

$f1 = new Formula('F1');
echo Formula::$count."<br>";

$f2 = new Formula('F2');
$f3 = new Formula('F3');
echo Formula::$count."<br>";
echo Formula::howMany()."<br>";

var_dump($f1, $f2, $f3);

// Exercice DB Static

$movies = DB::select('SELECT * FROM movie');



$movie = DB::selectOne('SELECT * FROM movie WHERE id_movie = :id', [
    'id' => 1,
]);

var_dump($movie);

DB::insert('INSERT INTO movie (title, released_at, description, duration, cover, id_category)
    VALUES (:title, :released_at, :description, :duration, :cover, :id_category)', [
        'title' => 'Test',
        'released_at' => '2000-01-01',
        'description' => 'Lorem Taguel',
        'duration' => '90',
        'cover' => 'test.jpg',
        'id_category' => 1,
    ]);
    var_dump($movies);
?>