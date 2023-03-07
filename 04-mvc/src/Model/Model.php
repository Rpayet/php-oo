<?php

namespace M2i\Mvc\Model;

use M2i\Mvc\DB;

abstract class Model
{
    public static function all()
    {
        $table = self::table();

        // Poiur accéder au nom de la classe actuelle

        // dump(get_called_class()); // M2i\Mvc\Model\Movie
        // dump(self::class); // M2i\Mvc\Model\Model (Classe dans laquelle on écrit cela)
        // dump(static::class); //M2i\Mvc\Model\Movie (Classe qui appelle la méthode all())

        return DB::select("SELECT * FROM $table", [], get_called_class());
    }


    /**
     * Permet de générer le nom de la table par rapport au nom de la table
     */
    private static function table(): string
    {
        $table = get_called_class(); //M2i\Mvc\Model\Movie
        $table = substr(strrchr($table, '\\'), 1); // Movie => Movie
        $table = strtolower($table); // Movie => movie

        return$table;
    }
}
?>