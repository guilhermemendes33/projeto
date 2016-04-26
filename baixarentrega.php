<?php

include 'conexao.php';

$prepara = $conexao_pdo->prepare("select * from motoboys");
$prepara->execute();

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Document</title>

	<meta name="description" content="Documento" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css">

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.js"type="text/javascript"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>

<body>
	
	<nav id="menu" class="navbar navbar-fixed-top">

			<div class="navbar-inner">
				<div class="container">
					<button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="logout.php" class="brand">Sair</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="clientecadastro.html">Clientes</a></li>
									
								</ul>
							</li>
							
							<li><a href="solicitar.html">Solicitar Entrega</a></li>
							
							<li class=""><a href="motoboycadastro.html">Cadastrar Motoboy</a></li>

						</ul>

					</div>


				</div>
			</div>

		</nav>

		<div id="interface">

			<form name="form3" action="cadentrega.php" method="post" class="form-horizontal well">

				<fieldset><legend>Baixar Entrega</legend></fieldset>

					<div class="control-group">
						<label for="" class="control-label">Data</label> <div class="controls"><input name="data" type="date" class="input-xlarge"></div>
					</div>

					<div class="control-group">
						<label for="" class="control-label">Hora</label> <div class="controls"><input name="Hora" type="time" class="input-xlarge" required></div>
					</div>
					
					<div class="control-group">
						<label for="" class="control-label">Solicitação</label> <div class="controls"><input name="solicitacao" type="password" class="input-small"></div>
					</div>	

					<div class="control-group">
						<label for="" class="control-label">Motoboy</label> <div class="controls">
						<select name="modelo">

							<?php



								while($linha = $prepara->fetch()){

									echo "<option value='$linha[codigo]'>$linha[nome]</option>";

								}

							?>

							

						</select></div>
					</div>

					<div class="control-group">
						<label for="" class="control-label">valor</label> <div class="controls controls-row "><input name="valor" type="number" class="input-small"></div>
					</div>	

					

					<div class="control-group">
						<label for="" class="control-label"></label> <div class="controls"><input type="submit" class="btn btn-primary" value="Baixar"></div>
					</div>

				</fieldset>

		</form>

	</div>


</body>

</html>