<?php namespace Controllers;

	use Models\Categoria as Categoria;
	
	class categoriasController{

		private $categorias;

		public function __construct(){
			$this->categorias = new Categoria();
		}

		public function index(){
			$datos = $this->categorias->listar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$this->categorias->set("categoria", $_POST['categoria']);
				$this->categorias->add();
				header('Location: '. URL . "/categorias");
			}
		}

		public function editar($id_categoria){
			if($_POST){
				$this->categorias->set("id_categoria", $_POST['id_categoria']);
				$this->categorias->set("categoria", $_POST['categoria']);
				$this->categorias->edit();
				header('Location: '. URL . "/categorias");
			}else{
				$this->categorias->set("id_categoria", $id_categoria);
				$datos = $this->categorias->view();
				return $datos;
			}
		}

		public function eliminar($id_categoria){
			$this->categorias->set("id_categoria", $id_categoria);
			$this->categorias->delete();
			header('Location: '. URL . "/categorias");
		}
	}
?>