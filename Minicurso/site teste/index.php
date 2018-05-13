<?php
	require_once('./class/sis.class.php');
	$index = new index();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
<div class="noticias">
<?php $index->lista();?>
</div>
</body>
</html>