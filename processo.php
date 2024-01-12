<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento de Gastos</title>
	<link rel="stylesheet" href="CSS/proc-style.css">

<body>

	<header>
		<h1>Lista de Gastos do Mês</h1>
	</header>

	<?php

	$servidor = "localhost";	
	$usuario = "root"; 
	$senha ="";
	$database = "seu_banco_de_dados"; //NOME DO BANCO DE DADOS!!!!!!!!!

	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


	/* if($conexao){
		echo "conectado com sucesso";
	}else{
		echo "falha ao conectar"
	}
	*/

	/* criando tabela*/



	$query = "CREATE TABLE IF NOT EXISTS tabelas(
		id int not null auto_increment,
		nome varchar(255) not null,
		valor varchar(255) not null,
		dia varchar(255) not null,
		primary key(id)

	)";
	$executar = mysqli_query($conexao, $query);

	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$dia = date('Y-m-d', strtotime($_POST['data']));

	$query = "INSERT INTO tabelas(nome, valor, dia) VALUES('$nome', '$valor', '$dia')";
	$executar = mysqli_query($conexao, $query);

	echo '<style>
			table {
				width: 100%;
				border-collapse: collapse;
				margin-top: 20px;
			}

			th, td {
				border: 1px solid #dddddd;
				text-align: left;
				padding: 8px;
			}

			th {
				background-color: #f2f2f2;
			}
		</style>';

	echo '<table>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Valor</th>
					<th>Dia</th>
				</tr>';
	$consulta = mysqli_query($conexao, "SELECT * FROM tabelas");
	while($linha = mysqli_fetch_array($consulta))	{
		echo '<tr>';
		echo '<td>';
		echo $linha['id'];
		echo '</td>';
		echo '<td>';
		echo $linha['nome'];
		echo '</td>';
		echo '<td>';
		echo $linha['valor'] . " Reais";
		echo '</td>';
		echo '<td>';
		echo $linha['dia'];
		echo '</td>';
		echo '</tr>';
	}			
	echo '</table>';


	?>

</body>
</html>