<?php namespace Controllers;
	
	use Models\Producto as Producto;
	use Models\Categoria as Categoria;
	
	class productosController{

		private $producto;
		private $categoria;

		public function __construct(){
			$this->producto = new Producto();
			$this->categoria = new Categoria();
		}

		public function index(){
			$datos = $this->producto->listar();
			return $datos;
		}

		public function agregar(){
			if(!$_POST){
				$datos = $this->categoria->listar();
				return $datos;
			}else{
					
					$this->producto->set("id_categoria", $_POST['id_categoria']);
					$this->producto->set("nombre_producto", $_POST['nombre_producto']);
					$this->producto->set("costoxu", $_POST['costoxu']);
					$this->producto->set("precioxu", $_POST['precioxu']);
					$this->producto->set("stock", $_POST['stock']);
					$this->producto->add();
					header("Location: " . URL . "/productos");
				
			}
		}

		public function editar($id_producto){
			if(!$_POST){
				$this->producto->set("id_producto", $id_producto);
				$datos = $this->producto->view();
				return $datos;
			}else{
					$this->producto->set("id_producto", $_POST['id_producto']);
					$this->producto->set("id_categoria", $_POST['id_categoria']);
					$this->producto->set("nombre_producto", $_POST['nombre_producto']);
					$this->producto->set("precioxu", $_POST['precioxu']);
					$this->producto->set("stock", $_POST['stock']);
					$this->producto->edit();
				header("Location: " . URL . "/productos");
			}
		}

		public function listarCategorias(){
			$datos = $this->categoria->listar();
			return $datos;
		}

		public function ver($id_producto){
			$this->producto->set("id_producto",$id);
			$datos = $this->producto->view();
			return $datos;
		}

		public function eliminar($id_producto){
			$this->producto->set("id_producto",$id_producto);
			$this->producto->delete();
			header("Location: " . URL . "/productos");
		}
}
	$productos = new productosController();

?>