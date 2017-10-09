<?php
	
	class Pessoa{

		public $nome = "Rasmus Lerdorf";
		protected $idade = 48;//compartilha com herança (extends)
		private $senha = "123456";// apenas a mesma classe enxerga

		public function verDados(){
			echo $this->nome . "<br/>";
			echo $this->idade . "<br/>";
			echo $this->senha . "<br/>";
		}
	}

	//Não herdara senha
	class Programador extends Pessoa{

		public function verDados(){

			//função q espera um objeto
			echo get_class($this)."<br/>";

			echo $this->nome . "<br/>";
			echo $this->idade . "<br/>";
			echo $this->senha . "<br/>";
		}
	}

	$objeto = new Programador();

	echo $objeto->nome . "<br/>";
	/*echo $objeto->idade . "<br/>";//dá erro, pois é protegido
	echo $objeto->senha . "<br/>";//dá erro, pois é privado*/
	echo $objeto->verDados();

?>