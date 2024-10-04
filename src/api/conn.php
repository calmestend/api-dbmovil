<?php

namespace Barac\Dbmovil\api;

use Barac\Dbmovil\core\Database;
use Barac\Dbmovil\core\Usuario;
use Exception;
use PDO;

require_once("../core/Usuario.php");
require_once("../core/Database.php");

header('Content-Type: application/json');

try {
	$db = new Database();
	$connection = $db->connect();

	$usuario = new Usuario($connection);

	$result = $usuario->all();

	$usuarios = $result->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($usuarios);
} catch (Exception $e) {

	echo json_encode([
		'error' => $e->getMessage()
	]);
}
