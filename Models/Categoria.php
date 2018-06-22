<?php namespace Models;
	
	class Categoria{

		private $id_categoria;
		private $categoria;
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
			$sql = "SELECT * FROM categorias";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO categorias (id_categoria, categoria) VALUES (null, '{$this->categoria}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM categorias WHERE id_categoria = '{$this->id_categoria}'";
			$this->con->consultaRetorno($sql);
		}

		public function edit(){
			$sql = "UPDATE categorias SET categoria = '{$this->categoria}' WHERE id_categoria = '{$this->id_categoria}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM categorias WHERE id_categoria = '{$this->id_categoria}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}

?>