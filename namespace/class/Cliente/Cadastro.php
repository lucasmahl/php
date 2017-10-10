<?php
	//para localizar o caminho q está a classe Cadastro
	namespace Cliente;

	class Cadastro extends \Cadastro{
		public function registrarVenda(){
			echo "Foi registrada venda para o cliente " . $this->getNome();
		}
	}

?>