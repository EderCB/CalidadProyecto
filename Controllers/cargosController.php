<?php namespace Controllers;

	use Models\Cargo as Cargo;
	
	class cargosController{

		private $cargos;

		public function __construct(){
			$this->cargos = new Cargo();
		}

		public function index(){
			$datos = $this->cargos->listar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$this->cargos->set("cargo", $_POST['cargo']);
				$this->cargos->add();
				header('Location: '. URL . "/cargos");
			}
		}

		public function editar($id_cargo){
			if($_POST){
				$this->cargos->set("id_cargo", $_POST['id_cargo']);
				$this->cargos->set("cargo", $_POST['cargo']);
				$this->cargos->edit();
				header('Location: '. URL . "/cargos");
			}else{
				$this->cargos->set("id_cargo", $id_cargo);
				$datos = $this->cargos->view();
				return $datos;
			}
		}

		public function eliminar($id_cargo){
			$this->cargos->set("id_cargo", $id_cargo);
			$this->cargos->delete();
			header('Location: '. URL . "/cargos");
		}
	}
?>