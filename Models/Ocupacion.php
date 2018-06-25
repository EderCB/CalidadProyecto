<?php namespace Models;
	
	class Ocupacion{

		private $id_ocupacion;
		private $ocupacion;
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
			$sql = "SELECT * FROM ocupaciones";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO ocupaciones (id_ocupacion, ocupacion) VALUES (null, '{$this->ocupacion}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM ocupaciones WHERE id_ocupacion = '{$this->id_ocupacion}'";
			$this->con->consultaRetorno($sql);
		}

		public function edit(){
			$sql = "UPDATE ocupaciones SET ocupacion = '{$this->ocupacion}' WHERE id_ocupacion = '{$this->id_ocupacion}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM ocupaciones WHERE id_ocupacion = '{$this->id_ocupacion}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}

?>