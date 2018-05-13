<?php 
    require_once("classes/sistema.class.php");
    $post = new sistema();
    $con = new conexao(); $con->conecta();
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>News Magazine</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.setup.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

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
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
            <?php $post-> menu();?>
        </ul>
      </div>
    </div>
    <div class="column">
      <ul class="latestnews">
        <?php $post->menu_lateral();?>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="adblock">

    <br class="clear" />
  </div>
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="#">Mais acessada &raquo;</a></h2>
      <img width="100px" src="foto/<?php $post->noticias_baixa('foto' ,2); ?>" alt="" />
      <p><strong><a href="#"><?php $post->noticias_baixa('titulo', 1); ?></a></strong></p>
      <p><?php $post->noticias_baixa('descricao' , 1); ?></p>
    </div>
    <div class="fl_right">
      <h2><a href="#">Outras &raquo;</a></h2>
      <img width="100px" src="foto/<?php $post->noticias_baixa('foto' , 3); ?>" alt="" />
      <p><strong><a href="#"><?php $post->noticias_baixa('titulo', 3); ?></a></strong></p>
      <p><?php $post->noticias_baixa('descricao' , 3); ?></p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2>Mais Acessadas:</h2>
        <ul>
          <li><img width="190px" height="130px" src="foto/<?php $post->noticias_baixa('foto', 2); ?>" alt="" />
            <p><?php $post->noticias_baixa('titulo', 2); ?></p>
            <p class="readmore"><a href="#">Continue Lendo &raquo;</a></p>
          </li>
          <li><img width="190px" height="130px" src="foto/<?php $post->noticias_baixa('foto', 3); ?>" alt="" />
            <p><?php $post->noticias_baixa('descricao', 3); ?></p>
            <p class="readmore"><a href="#">Continue Lendo &raquo;</a></p>
          </li>
          <li class="last"><img width="190px" height="130px" src="foto/<?php $post->noticias_baixa('foto', 4); ?>" alt="" />
            <p><?php $post->noticias_baixa('descricao', 4); ?></p>
            <p class="readmore"><a href="#">Continue Lendo &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">
    <div class="footbox">
      <h2>Jornais</h2>
      <ul>
        <li><a href="#">Sobre EsportesNews</a></li>
        <li><a href="#">Acervo EsportesNews</a></li>
        <li><a href="#">Expediente EsportesNews</a></li>
        <li><a href="#">Seminario EsportesNews</a></li>
        <li class="last"><a href="#">Trabalhe Conosco</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Fale com EN</h2>
      <ul>
        <li><a href="#">Anuncie</a></li>
        <li><a href="#">Atendimento ao Assinante</a></li>
        <li><a href="#">Erramos ?</a></li>
        <li><a href="#">Fale com EsportesNews</a></li>
        <li><a href="#">Ombudsman</a></li>
        <li class="last"><a href="#">Painel do Leitor</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="socialise">
    <ul>
      <li><a href="#"><img src="layout/images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="layout/images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="layout/images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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