<?php namespace Models;

	class Empleado{

		private $id_producto;
		private $id_genero;
		private $id_ocupacion;
		private $id_cargo;
		private $dni_emp;
		private $nombre_emp;
		private $apellidopat_emp;
		private $apellidomat_emp;
		private $direccion_emp;
		private $email_emp;
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
			$sql = "SELECT t1.*, t2.genero as genero, t3.ocupacion as ocupacion, t4.cargo as cargo
			FROM empleados t1 
			INNER JOIN generos t2 
			ON t1.id_genero = t2.id_genero
			INNER JOIN ocupaciones t3 
			ON t1.id_ocupacion = t3.id_ocupacion
			INNER JOIN cargos t4
			ON t1.id_cargo = t4.id_cargo";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO empleados (id_empleado, id_genero, id_ocupacion, id_cargo, dni_emp, nombre_emp, apellidopat_emp, apellidomat_emp, direccion_emp, email_emp, fecha_reg_emp) VALUES (null, '{$this->id_genero}', '{$this->id_ocupacion}', '{$this->id_cargo}', '{$this->dni_emp}', '{$this->nombre_emp}',  '{$this->apellidopat_emp}', '{$this->apellidomat_emp}', '{$this->direccion_emp}',  '{$this->email_emp}',  NOW()) ";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM empleados WHERE id_empleado = '{$this->id_empleado}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
			$sql = "UPDATE empleados SET id_genero = '{$this->id_genero}',  id_ocupacion = '{$this->id_ocupacion}',  id_cargo = '{$this->id_cargo}', dni_emp = '{$this->dni_emp}', nombre_emp = '{$this->nombre_emp}', apellidopat_emp = '{$this->apellidopat_emp}', apellidomat_emp = '{$this->apellidomat_emp}', direccion_emp = '{$this->direccion_emp}', email_emp = '{$this->email_emp}'
				WHERE id_empleado = '{$this->id_empleado}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT t1.*, t2.genero as genero, t3.ocupacion as ocupacion, t4.cargo as cargo
			FROM empleados t1 
			INNER JOIN generos t2 
			ON t1.id_genero = t2.id_genero
			INNER JOIN ocupaciones t3 
			ON t1.id_ocupacion = t3.id_ocupacion
			INNER JOIN cargos t4
			ON t1.id_cargo = t4.id_cargo
			WHERE t1.id_empleado = '{$this->id_empleado}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
?>