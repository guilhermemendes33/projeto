<?php

	$base_dados = 'entrega';
	$usuario_bd = 'root';
	$senha_bd = 'vertrigo';
	$host_db = 'localhost';
	$conexao_pdo = null;

	$detalhes_pdo = 'mysql:host=' . $host_db . ';dbname=' . $base_dados;

	try{

		$conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);

	}

	catch (PDOException $e){

		print "Erro: " . $e->getMessage() . "<br />";

		die();

	}


	?>