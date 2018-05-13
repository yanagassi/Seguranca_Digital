<?php
require_once("../classes/admin.class.php");
	$Login = new Login();
	$Login->login($_POST['usuario'] , $_POST['pass']);
?>