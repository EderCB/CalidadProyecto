<?php namespace Models;
	
	class Genero{

		private $id_genero;
		private $genero;
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
			$sql = "SELECT * FROM generos";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO generos (id_genero, genero) VALUES (null, '{$this->genero}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM generos WHERE id_genero = '{$this->id_genero}'";
			$this->con->consultaRetorno($sql);
		}

		public function edit(){
			$sql = "UPDATE generos SET genero = '{$this->genero}' WHERE id_genero = '{$this->id_genero}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM generos WHERE id_genero = '{$this->id_genero}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}

?>