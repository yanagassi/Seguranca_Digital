<?php
	require_once("../classes/admin.class.php");
	$noticia = new noticia();
	$noticia-> postar($_POST['titulo'], $_POST['noticia']);
?>