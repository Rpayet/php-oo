<?php

namespace M2i\Mvc\Model;

use M2i\Mvc\DB;

abstract class Model
{
    public static function all()
    {
        $table = self::table();

        return DB::select("SELECT * FROM $table");
    }


    /**
     * Permet de générer le nom de la table par rapport au nom de la table
     */
    private static function table(): string
    {
        $table = get_called_class(); //M2i\Mvc\Model\Movie
        $table = substr(strrchr($table, '\\'), 1);
        $table = strtolower($table);

        return$table;
    }
}
?>