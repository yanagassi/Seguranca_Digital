<?php
/**
* 
*/
error_reporting(0);
class conn
{
	function conecta()
	{
		$server = 'localhost';
		$user = 'root';
		$pass = 'vertrigo';
		$banco = 'teste_noticias';
		$conn = mysql_connect($server, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
		$selecao = mysql_select_db($banco) or die ("Não conectado ao Banco de Dados ...". mysql_error());
		if(isset($selecao));
		return $conn;
	}
}
/**
* 
*/
class index
{
	function __construct()
	{
		$con = new conn();
		$this->connexao = $con->conecta();
	}

	function lista()
	{

		$query = mysql_query("SELECT * FROM noticias ORDER BY id DESC") or die (mysql_error($this->connexao));
		$linhas = mysql_num_rows($query);
		for ($i=0; $i <$linhas ; $i++) { 
			$dados = mysql_fetch_array($query);
			print("<a href='./noticia.php?id=".$dados['id']."'>".$dados['titulo']."</a>" );
			print("<br>");

		}
	}
	function noticia($id, $coluna)
	{
		$query = mysql_query("SELECT * FROM noticias where id=$id") or die (mysql_error($this->connexao));
		$linhas = mysql_num_rows($query);
		$dados = mysql_fetch_array($query);
		print($dados[$coluna]);
	}
}
?>