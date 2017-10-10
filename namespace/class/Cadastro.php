<?php

	class Cadastro{
		private $nome;
		private $email;
		private $senha;

		//método retorna string, função do php7
		public function getNome():string{
			return $this->nome;
		}
		
		public function getEmail():string{
			return $this->email;
		}
		
		public function getSenha():string{
			return $this->senha;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function __toString(){
			//traz em array
			return json_encode(array(
				"Nome"=>$this->getNome(),
				"e-Mail"=>$this->getEmail(),
				"PassWord"=>$this->getSenha()
			));
		}
	}

?>