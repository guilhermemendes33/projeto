<?php

	include "conexao.php";

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	
try{	

			$stmte = $conexao_pdo->prepare("insert into motoboys(nome, telefone, endereco, numero, bairro) values(:nome, :telefone, :endereco, :numero, :bairro)");
			$stmte->bindParam(":nome", $nome , PDO::PARAM_STR);	
			$stmte->bindParam(":telefone", $telefone , PDO::PARAM_STR);	
			$stmte->bindParam(":endereco", $endereco , PDO::PARAM_STR);	
			$stmte->bindParam(":numero", $numero , PDO::PARAM_STR);	
			$stmte->bindParam(":bairro", $bairro , PDO::PARAM_INT);	
			
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

	



?>