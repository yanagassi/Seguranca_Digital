<?php
error_reporting(0);
class conexao
{
	public function conecta()  	
	{
		$server = 'localhost';
		$user = 'root';
		$pass = 'vertrigo';
		$banco = 'noticias';
		$conn = mysql_connect($server, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
		$selecao = mysql_select_db($banco) or die ("Não conectado ao Banco de Dados ...". mysql_error());
		if(isset($selecao));
		return $conn;
	}
}

class Login
{
	
	function __construct()
	{
		$con = new conexao();
		$this->connexao = $con->conecta();
		session_start();
	}

	function login($login , $pass)
	{
		if(empty($login) || empty($pass))
		{
			session_destroy();
			header("Location: login.php");
		}
		else
		{
			$pass = md5($pass);
			$query = mysql_query("SELECT * FROM usuarios WHERE usuario = '". $login ."'" ) or die (mysql_error($this->connexao));
			$dados = mysql_fetch_array($query);
			$linhas = mysql_num_rows($query);
			for($i=0;$i<$linhas;$i++)
			{
				if($login == $dados['usuario'] && $pass == $dados['senha'])
				{
					$_SESSION['usuario'] = md5('token');
					print($_SESSION['usuario']);
					header("Location: index.php");
				}else
				{
					print("<h1>Senha Errada !!! </h1>");
				}
			}
		}
	}

	function valida($session)
	{
		if(empty($session))
		{
			header("Location: login.php");
			session_destroy();
		}
		else{
			$query = mysql_query("SELECT * FROM usuarios WHERE token='". $session ."'") or die (mysql_error($this->connexao));
			$dados = mysql_fetch_array($query);
			$linhas = mysql_num_rows($query);
			for($i=0;$i<$linhas;$i++)
			{
				$ret = $dados['usuario'];
				break;
			}
			if (empty($ret)) {
				header("Location: login.php");
				session_destroy();
			}
		}
	}

	function sair()
	{
		$_SESSION['usuario'] = '';
		session_destroy();
		header("Location: ../index.php");
	}
}
/**
* 
*/
class noticia
{
	
	function __construct()
	{
		$con = new conexao();
		$this->connexao = $con->conecta();
	}

	function postar($titulo, $noticia)
	{
		if (!empty($titulo) || !empty($noticia)) {
			mysql_query("INSERT INTO noticias (id, titulo, noticia, foto, descricao) VALUES (null, '".$titulo."', '".$noticia."',' ',' ' )") or die (mysql_error());
			header("Location: index.php");	
		}
	}
}
?>