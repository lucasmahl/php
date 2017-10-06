<?php

	class Carro{
		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){
			return $this->modelo;
		}

		//pode ser outro nome em $modelo, exemplo: $value
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getMotor():float{
			return $this->motor;
		}

		public function setMotor($value){
			$this->motor = $value;
		}

		public function getAno():int{
			return $this->ano;
		}

		public function setAno($valor){
			$this->ano = $valor;
		}

		public function exibir(){
			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);
		}
	}

	$gol = new Carro();
	//$gol->modelo = "Gol GT"; funcao errada
	$gol->setModelo("Gol GT");
	$gol->setMotor("1.6");
	$gol->setAno("2017");

	echo $gol->getModelo();
	echo "<br/>";
	echo $gol->getMotor();
	echo "<br/>";
	echo $gol->getAno();
	echo "<br/>";

	print_r($gol->exibir());
	echo "<br/>";
	var_dump($gol->exibir());

?>