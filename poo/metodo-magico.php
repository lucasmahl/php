<?php
	class Endereco{
		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($a, $b, $c){
		
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
		
		}

		public function __destruct(){
			var_dump("Destruir");
		}

		public function __toString(){
			return $this->logradouro.", ".$this->numero." e ".$this->cidade.".<br/>";
		}
	}
	
	$meuEndereco = new Endereco("Rua Tao", 123, "Garopaba");

	/*var_dump($meuEndereco);

	unset($Endereco);*/

	echo $meuEndereco;
?>