<?php
                require_once("../modeloAbstractoDB.php");
	
                class Ciudadanos extends ModeloAbstractoDB {
		public $ciudadano_cedula;
        public $ciudadano_nombres;
		public $ciudadano_apellidos;
		public $ciudadano_fecha_nacimiento;
		public $ciudadano_telefono;
		public $ciudadano_celular;
		public $ciudadano_direccion;
		public $Barrio_codigo;
		public $Comuna_codigo;
		public $Munici_codigo;
		public $Depa_codigo;
		public $estado;
		public $usuario_contrasena;
		
		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($ciudadano_cedula='') {
			if($ciudadano_cedula !=''):
				$this->query = "
                                SELECT 
				c.ciudadano_cedula, 
				c.ciudadano_nombres, 
				c.ciudadano_apellidos, 
				c.ciudadano_fecha_nacimiento, 
				c.ciudadano_telefono, 
				c.ciudadano_celular, 
				c.ciudadano_direccion, 
				estado, 
				b.Barrio_nombre, 
				co.Comuna_nombre, 
				m.Munici_nombre
				FROM 
				ciudadano as c,
				barrio as b,
				comuna co,
				municipio as m
				WHERE
				c.ciudadano_cedula= '$ciudadano_cedula'
				AND 
				c.Barrio_codigo=b.Barrio_codigo
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function lista() {
			$this->query = "
 				SELECT 
				c.ciudadano_cedula, 
				c.ciudadano_nombres, 
				c.ciudadano_apellidos, 
				c.ciudadano_fecha_nacimiento, 
				c.ciudadano_telefono, 
				c.ciudadano_celular, 
				c.ciudadano_direccion, 
				estado, 
				b.Barrio_nombre, 
				co.Comuna_nombre, 
				m.Munici_nombre
				FROM 
				ciudadano as c
				inner join barrio as b ON(c.barrio_codigo=b.Barrio_codigo)
				inner join comuna co ON(c.comuna_codigo=co.Comuna_codigo)
				inner join municipio as m ON(c.ciudad_codigo=m.Munici_codigo)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
                
 
		public function listaDepartamento() {
			$this->query = "
 				SELECT Depa_codigo,Depa_nombre
				FROM 
				departamento
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}


		public function listaMunicipio($Depa_codigo) {
			$this->query = "
 				SELECT Munici_codigo, Munici_nombre
				FROM 
				municipio
				WHERE
				Depa_codigo='$Depa_codigo'
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}


		public function listaComuna($Munici_codigo) {
			$this->query = "
 				SELECT 	Comuna_codigo, 	Comuna_nombre
				FROM 
				comuna
				WHERE
				Munici_codigo='$Munici_codigo'
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
				public function listaBarrio($Comuna_codigo) {
			$this->query = "
 				SELECT Barrio_codigo, Barrio_nombre
				FROM 
				barrio
				WHERE
				Comuna_codigo='$Comuna_codigo'
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('ciudadano_cedula', $datos)):
				$this->consultar($datos['ciudadano_cedula']);
				if($datos['ciudadano_cedula'] != $this->ciudadano_cedula):
					foreach ($datos as $campo=>$valor):
						$$campo = $valor;
					endforeach;
                    $this->query = "
					INSERT INTO ciudadano
					(ciudadano_cedula,ciudadano_nombres,ciudadano_apellidos,ciudadano_fecha_nacimiento,
						ciudadano_telefono,ciudadano_celular,ciudadano_direccion,Barrio_codigo,estado)
					VALUES
					('$ciudadano_cedula','$ciudadano_nombres','$ciudadano_apellidos','$ciudadano_fecha_nacimiento',
						'$ciudadano_telefono','$ciudadano_celular', '$ciudadano_direccion',
						'$Barrio_codigo','$estado')
					";
					$this->ejecutar_query_simple(); $this->query = "
					INSERT INTO usuario
					(usuario_login,usuario_contraseña,roll_codigo)
					VALUES
					('$ciudadano_cedula','$usuario_contrasena','1')
					";
					$this->ejecutar_query_simple();
				endif;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE basenomina
			SET 
                        Dia='$Dia',
			Mes='$Mes',
			Ano='$Ano',
			Horario='$Horario',
			Cant_Hora='$Cant_Hora'
			WHERE id = '$id'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($ciudadano_cedula='') {
			$this->query = "
			DELETE FROM ciudadano
			WHERE ciudadano_cedula = '$ciudadano_cedula'
			";
			$this->ejecutar_query_simple();
		}
		function __destruct() {
			unset($this);
		}
	}
?>