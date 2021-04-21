<?php 
	abstract class Persona{
		public $nombre;
		public $apellido;
		public $telefono;

		public function __construct($nombre,$apellido,$telefono){
			$this -> nombre = $nombre;
			$this -> apellido = $apellido;
			$this -> telefono = $telefono;

		}

		public function decirNombre(){
			return $this -> nombre;
		}

		public function decirApellido(){
			return $this -> apellido;
		}

		public function decirTelefono(){
			return $this -> telefono;
		}

	}