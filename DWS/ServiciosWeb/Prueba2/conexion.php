<?php
abstract class Conexion
{
    private static $server = 'localhost';
    private static $db = 'pizzeria';
    private static $user = 'root';
    private static $password = '';
    public static function connectDB()
    {
        try {
            $conn = new PDO("mysql:host=" . self::$server . ";dbname=" . self::$db , self::$user, self::$password);
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die("Error: " . $e->getMessage());
        }
        return $conn;
    }
}