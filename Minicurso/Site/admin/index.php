<?php
	require_once("../classes/admin.class.php");
	$Login = new Login();
	session_start();
	$Login->valida($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Area Administrativa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="topo">
		<a id="logo"><b id="logo1">E</b>sportes <b id="logo1">O</b>nline</a>
		<a id="sair" href="./sair.php">Sair</a>
	</div>
	<div class="noticia">
		<form method="POST" action="./postar.php">
			<input type="text" id="titulo" name="titulo" placeholder="Titulo da Noticia">
			<textarea placeholder="Texto de Noticia" name="noticia"></textarea>
			<input id="botao" type="submit" value="Postar !">
		</form>
	</div>
</body>
</html>

