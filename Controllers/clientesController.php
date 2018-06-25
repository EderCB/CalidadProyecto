<?php namespace Controllers;
	
	use Models\Cliente as Cliente;
	use Models\Genero as Genero;
	
	class clientesController{

		private $cliente;
		private $genero;

		public function __construct(){
			$this->cliente = new Cliente();
			$this->genero = new Genero();

		}

		public function index(){
			$datos = $this->cliente->listar();
			return $datos;
		}

		public function agregar(){
			if(!$_POST){
				$datos = $this->genero->listar();
				return $datos;
			}else{
					
					$this->cliente->set("id_genero", $_POST['id_genero']);
					$this->cliente->set("dni_cli", $_POST['dni_cli']);
					$this->cliente->set("nombre_cli", $_POST['nombre_cli']);
					$this->cliente->set("apellidopat_cli", $_POST['apellidopat_cli']);
					$this->cliente->set("apellidomat_cli", $_POST['apellidomat_cli']);
					$this->cliente->set("direccion_cli", $_POST['direccion_cli']);
					$this->cliente->set("telefono_cli", $_POST['telefono_cli']);
					$this->cliente->set("email_cli", $_POST['email_cli']);
					$this->cliente->add();
					header("Location: " . URL . "/clientes");
				
			}
		}

		public function editar($id_cliente){
			if(!$_POST){
				$this->cliente->set("id_cliente", $id_cliente);
				$datos = $this->cliente->view();
				return $datos;
			}else{
					$this->cliente->set("id_cliente", $_POST['id_cliente']);
					$this->cliente->set("id_genero", $_POST['id_genero']);
					$this->cliente->set("dni_cli", $_POST['dni_cli']);
					$this->cliente->set("nombre_cli", $_POST['nombre_cli']);
					$this->cliente->set("apellidopat_cli", $_POST['apellidopat_cli']);
					$this->cliente->set("apellidomat_cli", $_POST['apellidomat_cli']);
					$this->cliente->set("direccion_cli", $_POST['direccion_cli']);
					$this->cliente->set("telefono_cli", $_POST['telefono_cli']);
					$this->cliente->set("email_cli", $_POST['email_cli']);
					$this->cliente->edit();
				header("Location: " . URL . "/clientes");
			}
		}

		public function listarGeneros(){
			$datos = $this->genero->listar();
			return $datos;
		}

		public function ver($id_cliente){
			$this->cliente->set("id_cliente",$id);
			$datos = $this->cliente->view();
			return $datos;
		}

		public function eliminar($id_cliente){
			$this->cliente->set("id_cliente",$id_cliente);
			$this->cliente->delete();
			header("Location: " . URL . "/clientes");
		}
}
	$clientes = new clientesController();

?>