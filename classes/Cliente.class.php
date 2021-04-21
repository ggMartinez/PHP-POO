<?php 

	require "Persona.class.php";

	class Cliente extends Persona{
		public $saldo;
		public $fechaDePrimerCompra;

		public function mostrarSaldo(){
			return $this -> saldo;
		}
	}