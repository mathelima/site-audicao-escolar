<?php
	
	$conexao = mysqli_connect("localhost","root","root","audicaoEscolar");

	mysqli_set_charset($conexao,'utf8');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$responsavel = $_POST['responsavel'];
	$dataNasc = $_POST['dataNasc'];
	$idade = $_POST['idade'];
	$cidade = $_POST['cidade'];
	$escola = $_POST['escola'];
	$turma = $_POST['turma'];
		

	mysqli_query($conexao, "INSERT INTO crianca(id, nome, responsavel, dataNasc, idade, escola, turma, cidade, usuario, senha) VALUES (1, '$nome', '$responsavel', '$dataNasc', $idade, '$escola', '$turma', '$cidade', '$usuario', '$senha')");
	echo json_encode("Cadastro efetuado com sucesso!");

	mysqli_close($conexao);

?>