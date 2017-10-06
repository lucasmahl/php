<?php
	
	class Pessoa{
		public $nome;//atributo
		
		public function falar(){//método
			//acessa o nome do objeto(Não precisa de $, pois está no this)
			return "Meu nome é ".$this->nome;
		}
	}

	$lusca = new Pessoa();
	$lusca->nome = "Lusca Silva";

	//preciso do echo, pois return não printa em tela
	echo $lusca->falar();
	
?>