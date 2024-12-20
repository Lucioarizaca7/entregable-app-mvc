<?php
// include "config.php";
// Esta clase encapsula toda la lógica necesaria para conectar una aplicación PHP a una base de datos MySQL.
class Database{
    private $host = DB_HOST;
    private $user = BD_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;
    private $conn;

    public function connect(){
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->name,
                $this->user,
                $this->pass
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexión". $e->getMessage() ;
        }
        return $this->conn;
    }
}