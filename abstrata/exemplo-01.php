<?php

		interface Veiculo{

		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function trocarMarcha($marcha);
	}

	//todos os metodos acima precisam ser declarados abaixo, o nome não precisa ser igual
	abstract class Automovel implements Veiculo{
		public function acelerar($velocidade){
			echo "O veiculo acelerou até ". $velocidade." km/h.<br/>";
		}

		public function frenar($velocidade){
			echo "O veiculo freou até ". $velocidade . " km/h.<br/>";
		}

		public function trocarMarcha($marcha){
			echo "Marcha ". $marcha . " engatada.<br/>";
		}
	}

	//uma classe pode implementar várias interfaces, mas só uma abstrata
	class DelRey extends Automovel{
		public function empurrar(){

		}
	}

$carro = new DelRey();
$carro->acelerar(200);
$carro->trocarMarcha(3);
?>