<?php namespace Controllers;
	
	use Models\Empleado as Empleado;
	use Models\Genero as Genero;
	use Models\Ocupacion as Ocupacion;
	use Models\Cargo as Cargo;
	
	class empleadosController{

		private $empleado;
		private $genero;
		private $ocupacion;
		private $cargo;

		public function __construct(){
			$this->empleado = new Empleado();
			$this->genero = new Genero();
			$this->ocupacion = new Ocupacion();
			$this->cargo = new Cargo();

		}

		public function index(){
			$datos = $this->empleado->listar();
			return $datos;
		}

		public function agregar(){
			if(!$_POST){
				$datos = $this->genero->listar();
				return $datos;
			}else{
					
					$this->empleado->set("id_genero", $_POST['id_genero']);
					$this->empleado->set("id_ocupacion", $_POST['id_ocupacion']);
					$this->empleado->set("id_cargo", $_POST['id_cargo']);
					$this->empleado->set("dni_emp", $_POST['dni_emp']);
					$this->empleado->set("nombre_emp", $_POST['nombre_emp']);
					$this->empleado->set("apellidopat_emp", $_POST['apellidopat_emp']);
					$this->empleado->set("apellidomat_emp", $_POST['apellidomat_emp']);
					$this->empleado->set("direccion_emp", $_POST['direccion_emp']);
					$this->empleado->set("email_emp", $_POST['email_emp']);
					$this->empleado->add();
					header("Location: " . URL . "/empleados");
				
			}
		}

		public function editar($id_empleado){
			if(!$_POST){
				$this->empleado->set("id_empleado", $id_empleado);
				$datos = $this->empleado->view();
				return $datos;
			}else{
					$this->empleado->set("id_empleado", $_POST['id_empleado']);
					$this->empleado->set("id_genero", $_POST['id_genero']);
					$this->empleado->set("id_ocupacion", $_POST['id_ocupacion']);
					$this->empleado->set("id_cargo", $_POST['id_cargo']);
					$this->empleado->set("dni_emp", $_POST['dni_emp']);
					$this->empleado->set("nombre_emp", $_POST['nombre_emp']);
					$this->empleado->set("apellidopat_emp", $_POST['apellidopat_emp']);
					$this->empleado->set("apellidomat_emp", $_POST['apellidomat_emp']);
					$this->empleado->set("direccion_emp", $_POST['direccion_emp']);
					$this->empleado->set("email_emp", $_POST['email_emp']);
					$this->empleado->edit();
				header("Location: " . URL . "/empleados");
			}
		}

		public function listarGeneros(){
			$datos = $this->genero->listar();
			return $datos;
		}
		public function listarOcupaciones(){
			$datos = $this->ocupacion->listar();
			return $datos;
		}
		public function listarCargos(){
			$datos = $this->cargo->listar();
			return $datos;
		}

		public function ver($id_empleado){
			$this->empleado->set("id_empleado",$id);
			$datos = $this->empleado->view();
			return $datos;
		}

		public function eliminar($id_empleado){
			$this->empleado->set("id_empleado",$id_empleado);
			$this->empleado->delete();
			header("Location: " . URL . "/empleados");
		}
}
	$empleados = new empleadosController();

?>