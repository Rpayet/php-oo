<?php

namespace M2i\F1;

class DB 
{
    private static \PDO $pdo;

    /**
     * Permet d'établir une connexion à la BDD ou de la réutiliser.
     */  
    private static function getInstance(): \PDO
    {
        if(! self::$pdo) {
            self::$pdo = new PDO('mysql:host=localhost;dbname=webflix', 'root', '', [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
        }

        return self::$pdo;
    }

    /**
     * Permet de faire un select sur la BDD.
     */
    public static function select(string $sql): array
    {
        
        
        // $db->query('SELECT * FROM movie');
        // $query->fetchAll();
        
        // $query = $db->prepare('SELECT * FROM movie WHERE id = :id');
        // $query->bindValue(':id', 1);
        // $query->execute();
        // $query->fetch();
        
        // $query = $db->prepare('INSERT INTO movie (title, description) VALUES (:title, :description)');
        // $query->bindValue(':title', 'Le Parrain');
        // $query->bindValue(':description', 'Un film de gangsters');
        // $query->execute();
        
    }
}

?>