<?php

namespace Book\Mvc\Model;

use Book\Mvc\DB;

abstract class Model
{
    public static function all()
    {
        $table = self::table();

        // Pour accéder au nom de la classe actuelle

        // dump(get_called_class()); // M2i\Mvc\Model\Movie
        // dump(self::class); // M2i\Mvc\Model\Model (Classe dans laquelle on écrit cela)
        // dump(static::class); //M2i\Mvc\Model\Movie (Classe qui appelle la méthode all())

        return DB::select("SELECT * FROM $table", [], get_called_class());
    }

    /**
     * Permet de renvoyer une seul ligne d'une table liée au modèle
     */
    public static function find(int $id): mixed
    {
        $table = self::table();
        
        return DB::selectOne("SELECT * FROM $table WHERE id_$table = :id", [
            'id' =>$id,
        ], get_called_class());
    }


    public function save() 
    {
        $table = self::table();

        $properties = get_object_vars($this);
        array_shift($properties);
        $keys = array_keys($properties);

        $columns = implode(', ', $keys);
        $values = implode(', :', $keys);

        $sql = "INSERT INTO $table ($columns) VALUES (:$values)";
        
        DB::insert($sql, $properties);

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