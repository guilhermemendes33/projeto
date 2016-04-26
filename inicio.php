<?php

include 'conexao.php';

?>

<?php

	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

		header("Location: index.html");
		exit;

	}

	else{



	}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta name="description" content="Documento" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Documento</title>
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
							<li class=""><a href="baixarentrega.php">Baixar Entrega</a></li>
							<li class=""><a href="motoboycadastro.html">Cadastrar Motoboy</a></li>
							<li class=""><a href="clientescadastrados.php">Clientes Cadastrados</a></li>

						</ul>

					</div>


				</div>
			</div>

		</nav>


</body>

</html>