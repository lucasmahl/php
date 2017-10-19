<?php
	
	class Usuario {
		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;

		public function getIdusuario():int{
			return $this->idusuario;
		}

		public function setIdusuario($value){
			$this->idusuario = $value;
			return $this;
		}

		public function getDeslogin():string{
			return $this->deslogin;
		}

		public function setDeslogin($value){
			$this->deslogin = $value;
			return $this;
		}

		public function getDessenha():string{
			return $this->dessenha;
		}

		public function setDessenha($value){
			$this->dessenha = $value;
			return $this;
		}

		public function getDtcadastro():dateTime{
			return $this->dtcadastro;
		}

		public function setDtcadastro($value){
			$this->dtcadastro = $value;
			return $this;
		}

		public function loadById($id){
			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

			var_dump($id);

			if (count($results)>0) {
				$row = $results[0];

				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));

			}
		}

		public static function getList() {
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_users ORDER BY deslogin");
	}

		public function __toString(){
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y - H:i:s")
			));
		}
	}
	
?>