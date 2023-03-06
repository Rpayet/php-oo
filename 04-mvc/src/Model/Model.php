<?php

namespace M2i\Mvc\Model;

use M2i\Mvc\DB;

abstract class Model
{
    public static function all()
    {
        $table = get_called_class(); //M2i\Mvc\Model\Movie
        $table = substr(strrchr($table, '\\'), 1);
        $table = strtolower($table);
        
        return DB::select("SELECT * FROM $table");
    }
}
?>