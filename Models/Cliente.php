<?php namespace Models;

	class Cliente{

		private $id_cliente;
		private $id_genero;
		private $dni_cli;
		private $nombre_cli;
		private $apellidopat_cli;
		private $apellidomat_cli;
		private $direccion_cli;
		private $telefono_cli;
		private $email_cli;
		private $con;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT t1.*, t2.genero as genero
			FROM clientes t1 
			INNER JOIN generos t2 
			ON t1.id_genero = t2.id_genero";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO clientes (id_cliente, id_genero, dni_cli, nombre_cli, apellidopat_cli, apellidomat_cli, direccion_cli, telefono_cli, email_cli, fecha_reg_cli) VALUES (null, '{$this->id_genero}', '{$this->dni_cli}', '{$this->nombre_cli}',  '{$this->apellidopat_cli}', '{$this->apellidomat_cli}', '{$this->direccion_cli}', '{$this->telefono_cli}', '{$this->email_cli}', NOW()) ";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM clientes WHERE id_cliente = '{$this->id_cliente}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE clientes SET id_genero = '{$this->id_genero}', dni_cli = '{$this->dni_cli}', nombre_cli = '{$this->nombre_cli}', apellidopat_cli = '{$this->apellidopat_cli}', apellidomat_cli = '{$this->apellidomat_cli}', direccion_cli = '{$this->direccion_cli}',  telefono_cli = '{$this->telefono_cli}', email_cli = '{$this->email_cli}'
				WHERE id_cliente = '{$this->id_cliente}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT t1.*, t2.genero as genero
			FROM clientes t1 
			INNER JOIN generos t2 
			ON t1.id_genero = t2.id_genero
			WHERE t1.id_cliente = '{$this->id_cliente}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
?>