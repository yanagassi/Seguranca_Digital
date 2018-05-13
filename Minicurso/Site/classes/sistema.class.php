<?php 
	/**
	* 
	*/
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
	/**
	* 
	*/
	class sistema
	{
		
		function __construct()
		{
			$con = new conexao();
			$this->connexao = $con->conecta();
		}

		function printa_Noticia($dado)
		{
			$query = mysql_query("SELECT * FROM noticias ORDER BY id DESC") or die (mysql_error($this->connexao));
			$dados = mysql_fetch_array($query);
			$linhas = mysql_num_rows($query);
			for($i=0;$i<$linhas;$i++)
			{
				$ret = $dados[$dado];
				break;
			}
			print($ret);
		}
		function noticias_baixa($dado, $id)
		{
			$query = mysql_query("SELECT * FROM noticias WHERE id=$id") or die (mysql_error($this->connexao));
			$linhas = mysql_num_rows($query);
			$dados = mysql_fetch_array($query);
			for($i=0;$i<1;$i++)
			{
				$ret = $dados[$dado];
				break;
			}
			print($ret);
		}
		function printa_NoticiaId($dado,$id)
		{
			$query = mysql_query("SELECT * FROM noticias where id='$id'") or die (mysql_error($this->connexao));
			$dados = mysql_fetch_array($query);
			$linhas = mysql_num_rows($query);
			for($i=0;$i<$linhas;$i++)
			{
				$ret = $dados[$dado];
				break;
			}
			print($ret);
		}

		function menu()
		{
			$query = mysql_query("SELECT * FROM noticias ORDER BY id DESC") or die (mysql_error($this->connexao));
			$linhas = mysql_num_rows($query);
			
			for($i=0;$i<$linhas;$i++)
			{
				$dados = mysql_fetch_array($query);
				print("<li><img src='foto/".$dados['foto'] . "' alt='' />");
	            print("<div class='panel-overlay'>");
	            print("<a href='noticia.php?id=".$dados['id']."'style='color: white;'>");
	            print("<h2>".$dados['titulo'] . "</h2>");
	            print("<p>". substr($dados['noticia'],0,80) ."...". "</p>");
	           	print("</a>");
	            print("</div>");
	          	print("</li>");
	        }
		}

		function menu_lateral()
		{
			$query = mysql_query("SELECT * FROM noticias ORDER BY id DESC") or die (mysql_error($this->connexao));
			$linhas = mysql_num_rows($query);
			for($i=0;$i<3;$i++)
			{
				$dados = mysql_fetch_array($query);
				print("<li><img width='100px' src='foto/".$dados['foto']."' alt='' />");
		        print("<p><strong><a href='noticia.php?id=".$dados['id']."'>".$dados['titulo']."</p>");
		        print("</li>");
			}
		}
	}
?>