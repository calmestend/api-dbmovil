<?php

namespace Barac\Dbmovil\core;

use PDO;

class Usuario
{
	private PDO $conn;

	private $id;
	private $nombre;
	private $estatus;
	private $correo;
	private $clave;
	private $perfil;
	private $sesion;

	public function __construct(PDO $db)
	{
		$this->conn = $db;
	}

	public function all()
	{
		$query = "select * from TUsuarios";

		$statement = $this->conn->prepare($query);
		$statement->execute();

		return $statement;
	}
}
