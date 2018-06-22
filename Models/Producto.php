<?php namespace Models;

	class Producto{

		private $id_producto;
		private $id_categoria;
		private $nombre_producto;
		private $fecha_registro;
		private $costoxu;
		private $precioxu;
		private $stock;
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
			$sql = "SELECT t1.*, t2.categoria as categoria
			FROM productos t1 
			INNER JOIN categorias t2 
			ON t1.id_categoria = t2.id_categoria";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO productos(id_producto, id_categoria, nombre_producto, fecha_registro, costoxu, precioxu, stock) VALUES (null,'{$this->id_categoria}','{$this->nombre_producto}', NOW(), '{$this->costoxu}', '{$this->precioxu}', '{$this->stock}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM productos WHERE id_producto = '{$this->id_producto}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE productos SET id_categoria = '{$this->id_categoria}', nombre_producto = '{$this->nombre_producto}', precioxu = '{$this->precioxu}', stock = '{$this->stock}'
			WHERE id_producto = '{$this->id_producto}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT t1.*, t2.categoria as categoria
			FROM productos t1 
			INNER JOIN categorias t2 
			ON t1.id_categoria = t2.id_categoria
			WHERE t1.id_producto = '{$this->id_producto}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
?>