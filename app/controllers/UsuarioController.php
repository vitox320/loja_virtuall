<?php

namespace app\Controller;
require_once '../../vendor/autoload.php';

use app\Model\Connection;

$conn = Connection::getConnection();
$stmt = $conn->query("Select * from usuario");
$result = $stmt->fetch(\PDO::FETCH_ASSOC);
print_r($result);


class UsuarioController
{

    public function actionCreate()
    {
    }
    public function actionRead()
    {
    }
    public function actionUpdate()
    {
    }

    public function actionDelete()
    {
    }
}
