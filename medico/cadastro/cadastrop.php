<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['username'], $_POST['nome_resp'], $_POST['email'], $_POST['estado'], $_POST['cidade'], $_POST['senha'], $_POST['cpf_resp'], $_POST['cpf_filho'], $_POST['sobre'],  $_POST['telefone'],  $_POST['nome_filho'], $_POST['bairro'], $_POST['unidade']))
		{
			$username = $_POST['username'];
			$nome = $_POST['nome_resp'];
			$email = $_POST['email'];
			$estado = $_POST['estado'];
			$cidade = $_POST['cidade'];
			$senha  = $_POST['senha'];
			$cpf_resp = $_POST['cpf_resp'];
			$cpf_filho  = $_POST['cpf_filho'];
			$bairro = $_POST['bairro'];
			$sobre = $_POST['sobre'];
			$telefone = $_POST['telefone'];
			$unidade = $_POST['unidade'];
			$nome_filho = $_POST['nome_filho'];

			cadastrar($username, $nome, $email, $estado, $cidade, $senha, $cpf_resp, $cpf_filho, $bairro, $unidade, $sobre, $telefone, $nome_filho );
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../index.html">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {
		header("Location: ../index.html");
	}

	function checkValues($username, $senha) {
		return true;
	}

	function cadastrar($username, $nome, $email, $estado, $cidade, $senha, $cpf_resp, $cpf_filho, $bairro, $unidade, $sobre, $telefone, $nome_filho ) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO usuarios (username, nome_resp, email, estado, cidade, senha, cpf_resp, cpf_filho, bairro, unidade, sobre, telefone, nome_filho) VALUES ('".$username."', '".$nome."', '".$email."', '".$estado."', '".$cidade."', '".$senha."', '".$cpf_resp."', '".$cpf_filho."', '".$bairro."', '".$unidade."', '".$sobre."', '".$telefone."', '".$nome_filho."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
		
			
			header("Location: login/login.html");
		}	else {
			$message = '<h1>Erro ao cadastrar o usuário.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>
