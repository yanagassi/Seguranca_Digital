<?php
	require_once('./class/sis.class.php');
	$noticia = new index();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php $noticia->noticia($_GET['id'], 'titulo') ?></title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/noticia.css">
</head>
<body>
	<div class="topo"></div>
	<div class="titulo">
		<h1><?php $noticia->noticia($_GET['id'], 'titulo') ?></h1>
	</div>
	<div class="noticia">
		<p><?php $noticia->noticia($_GET['id'], 'noticia') ?></p>
	</div>
</body>
</html>