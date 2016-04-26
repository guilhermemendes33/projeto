<?php

	include "conexao.php";

	$data = $_POST['data'];
	$hora = $_POST['hora'];
	$origem = $_POST['origem'];
	$numero_origem = $_POST['numero_origem'];
	$bairro_origem = $_POST['bairro_origem'];
	$destino = $_POST['destino'];
	$numero_destino = $_POST['numero_destino'];
	$bairro_destino = $_POST['bairro_destino'];

		try{

		$stmte = $conexao_pdo->prepare("insert into solicitacao(data, hora, origem, numero_origem, bairro_origem, destino, numero_destino, bairro_destino) values(:data, :hora, :origem, :numero_origem, :bairro_origem, :destino, :numero_destino, :bairro_destino)");
		$stmte->bindParam(":data", $data , PDO::PARAM_STR);
		$stmte->bindParam(":hora", $hora , PDO::PARAM_STR);
		$stmte->bindParam(":origem", $origem , PDO::PARAM_STR);
		$stmte->bindParam(":numero_origem", $numero_origem , PDO::PARAM_INT);
		$stmte->bindParam(":bairro_origem", $bairro_origem , PDO::PARAM_STR);
		$stmte->bindParam(":destino", $destino , PDO::PARAM_STR);
		$stmte->bindParam(":numero_destino", $numero_destino , PDO::PARAM_INT);
		$stmte->bindParam(":bairro_destino", $bairro_destino , PDO::PARAM_INT);
		$executa=$stmte->execute();

	}

	catch(PDOException $e){

		echo $e->getMessage();

	}

?>