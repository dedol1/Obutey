<?php
class DB {
        // public static $host;
        // public static $dbName;
        // public static $username;
        // public static $password;
        //ourcomunmmy_boomers
     
        // public static $host = "localhost";
        // public static $dbName = "ourcomunmmy_obutey";
        // public static $username = "ourco_matrix";
        // public static $password = "@4dm1n123#";

        public static $host = "localhost";
        public static $dbName = "obutey";
        public static $username = "root";
        public static $password = "";

private static function connect() {
        $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
}

public static function query($query, $params = array()) {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        return $statement;
        
}

public static function fetch($query, $params = array()) {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        if (explode(' ', $query)[0] == 'SELECT') {
        $data = $statement->fetchAll();
        return $data;
        }
}

public static function count($query, $params = array()) {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        $data = $statement->rowCount();
        return $data;
       
}



}
