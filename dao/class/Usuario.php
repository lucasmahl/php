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
				
				$this->setData($results[0]);
			}
		}

		//não usou $this, pode ser static. Nao precisa ser instanciado o objeto
		public static function getList(){
			$sql = new Sql();

			return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario;");
		}

		public static function search($login){
			$sql = new Sql();

			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin;", array(':SEARCH'=>"%".$login."%"));
		}

		public function login($login, $password){
			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD;", array(":LOGIN"=>$login, ":PASSWORD"=>$password));

			var_dump($id);

			if (count($results)>0) {

				$this->setData($results[0]);
			}else{
				throw new Exception("Login e/ou senha inválidos.");
				
			}
		}

		public function setData($data){
				$this->setIdusuario($data['idUsuario']);
				$this->setDeslogin($data['desLogin']);
				$this->setDessenha($data['desSenha']);
				$this->setDtcadastro(new DateTime($data['dtcadastro']));
		}

		public function insert(){
			$sql = new Sql();

			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
				':LOGIN'=>$this->getDeslogin(),
				'PASSWORD'=>$this->getDessenha()
			));

			if (count($results)>0) {
				$this->setData($results[0]);
			}
		}

		public function update($login, $password){
			$this->setDeslogin($login);
			$this->setDessenha($password);

			$sql = new Sql();

			$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID;", array(
				':LOGIN'=>$this->getDeslogin(),
				':PASSWORD'=>$this->getDessenha(),
				':ID'=>$this->getIdusuario()
			));
		}

		public function delete(){
			$sql = new Sql();

			$sql->query("DELETE FROM tb_usuarios WHERE idUsuario = :ID;",array(
					':ID'=>$this->getIdusuario()
			));
			$this->setIdusuario(0);
			$this->setDeslogin("");
			$this->setDessenha("");
			$this->setDtcadastro(new DateTime());
		}

		//="" faz com q não se torne obrigatório
		public function __construct($login="",$password=""){
			$this->setDeslogin($login);
			$this->setDessenha($password);

		}

		public function __toString(){
			return json_encode(array(
				"idsuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y - H:i:s")
			));
		}
	}
	
?>