<?php

	include ('conexao.php');

	

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];

	$prepara = $conexao_pdo->prepare("select * from clientes where email='$email'");
	$prepara->execute();
	$contar = $prepara->rowCount();

	if($contar == 0){

		try{	

			$stmte = $conexao_pdo->prepare("insert into clientes(nome, email, senha, telefone, endereco, numero, bairro) values(:nome, :email, :senha, :telefone, :endereco, :numero, :bairro)");
			$stmte->bindParam(":nome", $nome , PDO::PARAM_STR);	
			$stmte->bindParam(":email", $email , PDO::PARAM_STR);	
			$stmte->bindParam(":senha", $senha , PDO::PARAM_STR);	
			$stmte->bindParam(":telefone", $telefone , PDO::PARAM_STR);	
			$stmte->bindParam(":endereco", $endereco , PDO::PARAM_STR);	
			$stmte->bindParam(":numero", $numero , PDO::PARAM_INT);		
			$stmte->bindParam(":bairro", $bairro , PDO::PARAM_STR);	
			$executa=$stmte->execute();


		

			if($executa){

				echo "Dados inseridos";

			}

			else{

				echo "Erro ao inserir dados";

			}

		}

		catch(PDOException $e){

			echo $e->getMessage();

		}

	}

	else{

		echo"E-mail ja cadastrado";

	}

?>