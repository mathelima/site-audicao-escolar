<?php
	
	$conexao = mysqli_connect("localhost","root","root","audicaoEscolar");

	mysqli_set_charset($conexao,'utf8');

	$sexo = $_POST['sexo'];
	$nome = $_POST['nome'];
	$dataNasc = $_POST['dataNasc'];
	$idade = $_POST['idade'];
	$cidade = $_POST['cidade'];
	$escola = $_POST['escola'];
	$turma = $_POST['turma'];
	$questao1 = $_POST['questao1'];
	$questao2 = $_POST['questao2'];
	$questao3 = $_POST['questao3'];
	$questao4 = $_POST['questao4'];
	$questao5 = $_POST['questao5'];
	$questao6 = $_POST['questao6'];
	$questao7 = $_POST['questao7'];
	$questao8 = $_POST['questao8'];
	$questao9 = $_POST['questao9'];
	$questao10 = $_POST['questao10'];
	$questao11 = $_POST['questao11'];
	$questao12 = $_POST['questao12'];
	$questao13 = $_POST['questao13'];
	$questao14 = $_POST['questao14'];

	mysqli_query($conexao, "INSERT INTO questionarios(id, nome, sexo, dataNasc, idade, escola, turma, cidade, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10, pergunta11, pergunta12, pergunta13, pergunta14) VALUES (5, '$nome', '$sexo', '$dataNasc', $idade, '$escola', '$turma', '$cidade', '$questao1', '$questao2', '$questao3', '$questao4', '$questao5', '$questao6', '$questao7', $questao8, $questao9, '$questao10', '$questao11', '$questao12', '$questao13', '$questao14')");
	echo json_encode("Questionário enviado com sucesso!");

	mysqli_close($conexao);

?>