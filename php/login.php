<?php
	
	$conexao = mysqli_connect("localhost","root","root","audicaoEscolar");

	mysqli_set_charset($conexao,'utf8');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$verifica = mysqli_query($conexao, "SELECT senha, usuario FROM fonoaudiologo WHERE '$usuario' = usuario and '$senha' = senha");

	$cont = mysqli_num_rows($verifica);

	if($cont == 0){

		echo json_encode("Email ou senha invalido!");

	}else{

		echo json_encode("Login efetuado!");

	}

	mysqli_close($conexao);

?>