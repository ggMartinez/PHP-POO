<?php 

	require "Persona.class.php";

	class Empleado extends Persona{
		public $sueldo;
		public $cargo;

		public function mostrarCargo(){
			return $this -> cargo;
		}
	}