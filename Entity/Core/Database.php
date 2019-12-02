<?php

class Database {
    private static $host   = "localhost";
    private static $dbname = "ez_cms_production_db";
    private static $user   = "root";
    private static $pass   = "";

    private static $pdo;

    private function pdo() {
        if (self::$pdo == null) {
            self::$pdo = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$dbname,
                self::$user,
                self::$pass
            );
        }
    }

    public static function Query($query) {
        self::pdo();
        $stm = self::$pdo->query($query);
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public static function CreateTableFor($model) {
        
    }
}