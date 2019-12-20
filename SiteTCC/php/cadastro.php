<?php

	$conexao = mysqli_connect("localhost", "root", "root", "lojinha");

	mysqli_set_charset($conexao,'utf8');

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$data = $_POST['data'];
	$numCartao = $_POST['numCartao'];
	$bandeira = $_POST['bandeira'];

	$verifica = mysqli_query($conexao, "SELECT email FROM cliente WHERE '$email' = email");

	$cont = mysqli_num_rows($verifica);

	if($cont != 0){

		echo json_encode("Email ja cadastrado!");

	}else{

		mysqli_query($conexao, "INSERT INTO cliente(nome, senha, email, dataNasc, numCrtao, bandeira, imagem) VALUES ('$nome', '$senha', '$email', '$data', '$numCartao', '$bandeira')");

		echo json_encode("Cadastro efetuado com sucesso!");
		
	}
	
?>