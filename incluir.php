<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<title>Controle de Apartamentos</title>
	<style>
		/* Remove the navbar's default margin-bottom and rounded borders */
		.navbar {
		  margin-bottom: 0;
		  border-radius: 0;
		}
		
		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		.row.content {height: 450px}
		
		/* Set gray background color and 100% height */
		.sidenav {
		  padding-top: 20px;
		  background-color: #f1f1f1;
		  height: 100%;
		}
		
		/* Set black background color, white text and some padding */
		footer {
		  background-color: #555;
		  color: white;
		  padding: 15px;
		}
		
		/* On small screens, set height to 'auto' for sidenav and grid */
		@media screen and (max-width: 767px) {
		  .sidenav {
			height: auto;
			padding: 15px;
		  }
		  .row.content {height:auto;}
		}
  </style>
  </head>
  <body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.html">
			<img src="imagens/logo.png" class="img-rounded" alt="Funcionários" width="30" height="30">
		  </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="index.html">Início</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Projects</a></li>
			<li><a href="#">Contact</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	  
	<div class="container-fluid text-center">
	  <div class="row content">
		<div class="col-sm-2 sidenav">
		  <p><a href="incluir.html">Incluir</a></p>
		  <p><a href="buscar.php">Buscar</a></p>
		  <p><a href="alterar.html">Alterar</a></p>
		  <p><a href="excluir.php">Excluir</a></p>
		</div>
		<div class="col-sm-8 text-left">
			<h1>Incluir novo apartamento</h1>
			<?php
				//Recebendo os dados do formulário
				if (isset ($_POST['num']))
					$numero = $_POST['num'];
				if (isset ($_POST['bloco']))
					$bloco = $_POST['bloco'];
				if (isset ($_POST['dependencias']))
					$dependencias = $_POST['dependencias'];
				if (isset ($_POST['aquisicao']))
					$aquisicao = $_POST['aquisicao'];
				if (isset ($_POST['status']))
					$status = $_POST['status'];
				if (isset ($_POST['preco']))
					$preco = $_POST['preco'];
				
				//Teste que verifica se os dados estão chegado
				//echo $numero."<br>".$bloco."<br>".$dependencias."<br>".$aquisicao."<br>".$status."<br>".$preco."<br>";
				
				$con = new PDO("mysql:host=mysql.hostinger.com.br;dbname=u521605105_lpw", "u521605105_rick", "av2lpw");
				
				//Checando a conexão com o banco
				if (isset ($con))
					echo "Conexão ao banco de dados feita com sucesso!";
				else
					echo "Falha na conexão com o banco de dados!";
				
				//Inserindo os dados na tabela
				$stmt = $con->prepare("INSERT INTO apartamentos(numero, bloco, dependencias, aquisicao, status, preco) VALUES(?, ?, ?, ?, ?, ?)");
				$stmt->bindParam(1,$numero);
				$stmt->bindParam(2,$bloco);
				$stmt->bindParam(3,$dependencias);
				$stmt->bindParam(4,$aquisicao);
				$stmt->bindParam(5,$status);
				$stmt->bindParam(6,$preco);
				$stmt->execute();
				
				echo "<h3>Inclusão feita com sucesso!</h3>";
			?>
		</div>
		<div class="col-sm-2 sidenav">
			<img src="imagens/apartamentos.png" class="img-rounded" alt="apartamentos" width="210" height="175">
		</div>
	  </div>
	</div>

	<footer class="container-fluid text-center">
	  <p>Ricardo Cassiano - Turma de LPW 2016.2 manhã</p>
	  <p>Professor Ricardo Marciano</p>
	</footer>
  </body>
</html>