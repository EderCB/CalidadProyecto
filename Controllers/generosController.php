<?php namespace Controllers;

	use Models\Genero as Genero;
	
	class generosController{

		private $generos;

		public function __construct(){
			$this->generos = new Genero();
		}

		public function index(){
			$datos = $this->generos->listar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$this->generos->set("genero", $_POST['genero']);
				$this->generos->add();
				header('Location: '. URL . "/generos");
			}
		}

		public function editar($id_genero){
			if($_POST){
				$this->generos->set("id_genero", $_POST['id_genero']);
				$this->generos->set("genero", $_POST['genero']);
				$this->generos->edit();
				header('Location: '. URL . "/generos");
			}else{
				$this->generos->set("id_genero", $id_genero);
				$datos = $this->generos->view();
				return $datos;
			}
		}

		public function eliminar($id_genero){
			$this->generos->set("id_genero", $id_genero);
			$this->generos->delete();
			header('Location: '. URL . "/generos");
		}
	}
?>