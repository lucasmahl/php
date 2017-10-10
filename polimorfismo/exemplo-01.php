<?php

	abstract class Animal{
		public function falar(){
			return "Som";
		}

		public function mover(){
			return "Anda";
		}

	}

	class Cachorro extends Animal{
		public function falar(){
			return "Late";
		}
	}

	class Gato extends Animal{
		public function falar(){
			return "Meiau";
		}
	}

	class Passaro extends Animal{
		public function falar(){
			return "Canta";
		}

		public function mover(){
			return "Voa e ".parent::mover();
		}
	}

$pluto = new Cachorro();

echo $pluto->falar()."<br/>";
echo $pluto->mover()."<br/>";

echo "-------------------------<br/>";

$tom = new Gato();
echo $tom->falar()."<br/>";
echo $tom->mover()."<br/>";

echo "-------------------------<br/>";

$bird = new Passaro();
echo $bird->falar()."<br/>";
echo $bird->mover()."<br/>";
?>