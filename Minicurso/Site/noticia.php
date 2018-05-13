<?php
  if (empty($_GET['id'])) {
      header("Location: index.php");
  }
   require_once("classes/sistema.class.php");
    $post = new sistema();
    $con = new conexao(); $con->conecta();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>News Magazine | <?php $post->printa_Noticia('titulo'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col0">
  <div id="topline">
     <p>Tel: (32)3222-0555| Mail: contato@esportesNews.com</p>
    <ul>
      <li><a href="#">Contato</a></li>
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.php"><strong>E</strong>sportes <strong>O</strong>nline</a></h1>
      <p>Você vê primeiro aqui!</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Inicio</a></li>
      </ul>
    </div>
    
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div class="container">
    <h1 style="font-size: 30px;"><?php $post->printa_NoticiaId('titulo',$_GET['id']); ?></h1>
    <img style="width: 100%;" src="foto/<?php $post->printa_NoticiaId('foto',$_GET['id']); ?>">
    <p style="font-size: 27px;"><?php $post->printa_NoticiaId('noticia',$_GET['id']); ?></p>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">
    <div class="footbox">
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="socialise">
    <ul>
      <li><a href="#"><img src="../layout/images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="../layout/images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="../layout/images/twitter.gif" alt="" /><span>Twitter</span></a></li>
    </ul>
    <div id="newsletter">
      <h2>NewsLetter Inscreva-se!</h2>
      <p>Por favor, digite seu e-mail e nome para participar.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Digital Newsletter</legend>
          <div class="fl_left">
            <input type="text" value="Seu nome&hellip;"  onfocus="this.value=(this.value=='Seu nome&hellip;')? '' : this.value ;" />
            <input type="text" value="Seu E-mail&hellip;"  onfocus="this.value=(this.value=='Seu E-mail&hellip;')? '' : this.value ;" />
          </div>
          <div class="fl_right">
            <input type="submit" name="newsletter_go" id="newsletter_go" value="&raquo;" />
          </div>
        </fieldset>
      </form>
      <p>Para cancelar a inscrição, por favor <a href="#">Clique aqui &raquo;</a>.</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Esportes News</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>