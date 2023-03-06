<?php

    namespace M2i\F1;

    class Formula 
    {
        public $name;
        public static $count = 0;
        public const WHEELS = 4;

        public function __construct($name)
        {
            $this->name = $name;
            self::$count++; // Appelle le mot-clé de la classe Mère
            //= static::$count; Appelle le mot-clé de la classe instancié (active)
        }

        public static function howMany()
        {
            return 'Sur la piste, il y a '.self::$count.' formules.';
        }

    }

?>