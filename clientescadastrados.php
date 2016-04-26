<?php

	include "conexao.php";

	$prepara = $conexao_pdo->prepare('select * from clientes');
	$prepara->execute();

	?>

	<link rel="stylesheet" type="text/css" href="estilo.css">

	<table border="1" id="tabelaspec">
		<tr>
			<th>Nome</th><th>Email</th><th>Telefone</th>

		</tr>

		<?php

	while($linha = $prepara->fetch()){

		echo'<tr><td>' . $linha['nome'] . '</td>';
		echo'<td>' . $linha['email'] . '</td>';
		echo'<td>' . $linha['telefone'] . '</td>';
		


	}

?>

</table>