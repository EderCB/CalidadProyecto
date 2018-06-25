<?php namespace Controllers;

	use Models\Ocupacion as Ocupacion;
	
	class ocupacionesController{

		private $ocupaciones;

		public function __construct(){
			$this->ocupaciones = new Ocupacion();
		}

		public function index(){
			$datos = $this->ocupaciones->listar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$this->ocupaciones->set("ocupacion", $_POST['ocupacion']);
				$this->ocupaciones->add();
				header('Location: '. URL . "/ocupaciones");
			}
		}

		public function editar($id_ocupacion){
			if($_POST){
				$this->ocupaciones->set("id_ocupacion", $_POST['id_ocupacion']);
				$this->ocupaciones->set("ocupacion", $_POST['ocupacion']);
				$this->ocupaciones->edit();
				header('Location: '. URL . "/ocupaciones");
			}else{
				$this->ocupaciones->set("id_ocupacion", $id_ocupacion);
				$datos = $this->ocupaciones->view();
				return $datos;
			}
		}

		public function eliminar($id_ocupacion){
			$this->ocupaciones->set("id_ocupacion", $id_ocupacion);
			$this->ocupaciones->delete();
			header('Location: '. URL . "/ocupaciones");
		}
	}
?>