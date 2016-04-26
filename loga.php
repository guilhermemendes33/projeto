<?php

include 'conexao.php';

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Document</title>

	<script type="text/javascript">

		function loginsuccessfully(){

			setTimeout("window.location='inicio.php'", 2000);

		}

		function loginfailed(){

			setTimeout("window.location='index.html'", 2000);

		}

	</script>

</head>

<body>
	


<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$prepara = $conexao_pdo->prepare("select * from clientes WHERE email = '$email' and senha = '$senha'");
$prepara->execute();


$contar = $prepara->rowCount();

if($contar > 0){

	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];

	echo "Autenticado";
	echo"<script>loginsuccessfully()</script>";

}

else{

	echo"Usuário ou senha inválido";
	echo"<script>loginfailed()</script>";

}

?>

</body>

</html>