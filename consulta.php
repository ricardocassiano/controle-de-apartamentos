<?php
/*Ideia: Receber o nome, pesquisá-lo no banco e retornar por funções a busca*/
	//Recebendo os dados do formulário
	if (isset ($_POST['num']))
		$numero = $_POST['num'];
	
	//Teste que verifica se os dados estão chegado
	//echo $nome."<br>".$tel."<br>".$cpf."<br>".$setor."<br>";
	//$dados = busca($nome);
	//TESTE DE IMPRESSÃO
	/*retornaTel($nome);
	echo "<br>";
	retornaNome($nome);
	echo "<br>";
	retornaCPF($nome);
	echo "<br>";
	retornaSetor($nome);*/
	
	//Conexão com o banco de dados - FUNÇÃO DESNECESSÁRIA
	/*function conexao()
	{
		$con = new PDO("mysql:host=localhost;dbname=cadastro_ricardo", "root", "vertrigo");
		
		//Checando a conexão com o banco
		if (isset ($con))
		{
			echo "Conexão ao banco de dados feita com sucesso!";
			return true;
		}
		else
		{
			echo "Falha na conexão com o banco de dados!";
			return false;
	}*/
	
	//Função de busca
	function busca($numero)
	{
		//$nome .= "%";
		$con = new PDO("mysql:host=mysql.hostinger.com.br;dbname=u521605105_lpw", "u521605105_rick", "av2lpw");
		$rs = $con->prepare("SELECT cod, numero, bloco, dependencias, aquisicao, status, preco FROM apartamentos WHERE numero LIKE ?");
		$rs->bindParam(1, $numero);
		if($rs->execute())
		{
			echo "<center>A consulta retornou ". $rs->rowCount()." resultados</center><br>";
			//Para imprimir todos os dados retornados
			if($rs->rowCount() > 0)
			{
				echo '
				<table border="3" align="center" width="80%">
					<tr align="center" style="font-weight: bold;">
						<td>Código</td>
						<td>Número</td>
						<td>Bloco</td>
						<td>Dependências</td>
						<td>Modo de Aquisição</td>
						<td>Disponibilidade</td>
						<td>Preço</td>
					</tr>';
				while($row = $rs->fetch(PDO::FETCH_OBJ))
				{
					echo '<tr align="center">';
					echo "<td>".$row->cod . "</td>";
					echo "<td>".$row->numero . "</td>";
					echo "<td>".$row->bloco . "</td>";
					echo "<td>".$row->dependencias . "</td>";
					echo "<td>".$row->aquisicao . "</td>";
					echo "<td>".$row->status . "</td>";
					echo "<td>".$row->preco . "</td>";
					//echo '<td><a href="alterar.html"><img src="imagens/alterar.jpg" width="10" height="10"></a></td>';
					//echo '<td><a href="excluir.php"><img src="imagens/excluir.jpg" width="10" height="10"></a></td>';
					echo "</tr>";
					$linha = $row;
				}
				echo "</table>";
				return $linha;
			}
		}
	}
?>