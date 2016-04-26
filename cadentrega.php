<?php

	include "conexao.php";

	$data = $_POST['data'];
	$hora = $_POST['hora'];
	$solicitacao = $_POST['solicitacao'];
	$motoboy = $_POST['motoboy'];
	$valor = $_POST['valor'];
	

	

		$sql = "insert into entregas value('', '$data', '$hora', '$solicitacao', '$motoboy', '$valor')";

		$query = mysql_query($sql);


		if(!$query){

			die("Erro de inserção" . mysql_error());

		}

		else{

			die("Dados inseridos");

		}



?>