<?php 

namespace app\models;

use PDO;

class Connection {

    public static $instance;

    public static function getConnection()
    {
        if(!isset(self::$instance)){
            self::$instance = new PDO("sqlsrv:Server=DESKTOP-95KB2L7\SQLEXPRESS;Database=loja_virtual", "sa", "88662479");
        }
        return self::$instance;
    }
}

$conn = Connection::getConnection();
$stmt = $conn->query("Select * from usuario");
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result);
