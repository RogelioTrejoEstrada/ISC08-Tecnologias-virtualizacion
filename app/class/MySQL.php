<?php
class MySQL
{
    private $host = "mysql:host=localhost;dbname=task-web";
    private $user = "root";
    private $password = "";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO($this->host, $this->user, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Retorna la Conexión de la Base de Datos
     */
    public function getConnection()
    {
        return $this->conn;
    }
}
