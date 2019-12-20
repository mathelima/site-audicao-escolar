<?php

	$conexao = mysqli_connect("localhost", "root", "root", "lojinha");

	mysqli_set_charset($conexao,'utf8');

	$descricao = $_POST['descricao'];
	$codigo = $_POST['codigo'];
	$valor = $_POST['valor'];
	$setor = $_POST['setor'];
	$tipo = $_POST['tipo'];
	$imagem = $_POST['imagem'];

	$verifica = mysqli_query($conexao, "SELECT codigo FROM produto WHERE '$codigo' = codigo");

	$cont = mysqli_num_rows($verifica);

	if($cont != 0){

		echo json_encode("Produto ja cadastrado!");

	}else{

		mysqli_query($conexao, "INSERT INTO produto(descricao, codigo, valor, setor, tipo, imagem) VALUES ('$descricao', '$codigo', '$valor', '$setor', '$tipo', '$imagem')");

		echo json_encode("Produto cadastrado com sucesso!");
		
	}
	
?>