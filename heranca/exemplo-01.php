<?php

	class Documento{
		private $numero;

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($valor){
			$this->numero=$valor;
		}
	}

	class CPF extends Documento{
		public function validar():bool{
			$numeroCPF = $this->getNumero();

			//validacao do cpf
			return true;
		}
	}

	$doc = new CPF();

	$doc->setNumero("123456789-01");

	var_dump($doc->validar());
	echo "<br/>";
	echo $doc->getNumero();
?>