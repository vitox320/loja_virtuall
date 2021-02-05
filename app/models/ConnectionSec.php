<?php

namespace app\Model;

use PDO;

class Connection
{

    public static $instance;

    public static function getConnection()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO("sqlsrv:Server=;Database=", "", "");
        }
        return self::$instance;
    }
}

