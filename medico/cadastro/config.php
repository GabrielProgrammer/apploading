<?php


	class Config
	{
		private $servidor = "localhost";
		private $user = "root";
		private $senha = "root";
		private $banco = "mysqlapp";

		function conectaBanco() {
			$con = mysqli_connect($this->servidor, $this->user, $this->senha, $this->banco);
			//conecta no mysql faz favor

			if (!$con) {
			    die('N�o foi poss�vel conectar: ' . mysqli_error());
			}

			return $con;
		}
	}

	$_SESSION['ROOT_ADDRESS'] = dirname(__FILE__);

?>
