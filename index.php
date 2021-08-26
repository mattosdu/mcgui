<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>MC GUI - principe da Ostentação</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/mediaqueries.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Abel:400,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
		<script src="js/html5.js" type="text/javascript"></script>
		<link href="css/ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->
<!-- PHP CODIGOS PHP -->
<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
$iexplorer = strpos($_SERVER['HTTP_USER_AGENT'], "MSIE") || strpos($_SERVER['HTTP_USER_AGENT'], "Trident");

if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $iexplorer == true): ?>
<link href="css/photoback.css" rel="stylesheet" type="text/css">
<?php else: ?>
<script type="text/javascript" charset="utf-8" src="js/tubular.js"></script>
<script type="text/javascript" charset="utf-8" src="js/load.tubular.js"></script>
<?php endif;?>
<!-- FINAL PHP CODIGOS PHP FINAL -->


<body>
<div id="wrapper" class="clearfix">
<!-- PHP CODIGOS PHP -->

<!-- Start IMG background -->
<ul class="cb-slideshow">	
            <li><span></span><div></div></li>
            <li><span></span><div></div></li>
            <li><span></span><div></div></li>	
            <li><span></span><div></div></li>
        </ul>
<!-- finish IMG background -->

<!-- FINAL PHP CODIGOS PHP FINAL -->
<!-- Start Header -->
<header id="header">
		
		<div class="clearfix pageWidth">
				<div id="logo"><a href="index.php"><img src="logo.png" alt="Mc Gui site oficial - Logo" title="Mc Gui site oficial - Logo">
                <?php if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $iexplorer == false): ?>
                </a></div><div id="video-controls" class="mutebnt"><a href="#" class="tubular-mute"><img alt="mute som" class="som"src="img/Mute.png" /></a><?php endif; ?></div>
				<!-- Start Navigation--> 
				<nav id="navigation"><a href="#" id="menu"></a>
				<ul>
						
						<li><a href="#Inicio" title="Inicio">Inicio</a></li>
                        <li><a href="#biografia" title="Biografia Us">Biografia</a></li>
                        <li><a href="#Agenda" title="Agenda">Agenda</a></li>
                        <li><a href="http://mcguioficial.com/loja/index.php" target="_blank" title="Loja">Loja</a></li>
                        <li><a href="#Fotos" title="Fotos">Fotos</a></li>
                        <li><a href="#Videos" title="Videos">Videos</a></li>
                        <li><a href="#contato" title="Contato">Contato</a></li>
				
				</ul>
		</nav>
				<!-- End Navigation --> 
		</div>
</header>

<!-- End Header--> 

 
<!-- Start Middle-->
<section id="container">
		<article class="pageControl pageWidth">  <div class="pageContainer" id="inicio"><h2>Bem Vindo ao meu site</h2>
 <p>Com apenas 15 anos de idade MC Gui já é um dos principais idolos teen do Brasil. Seus Clipes somam mais de 50 milhões de visualizações no TouTube, Seus perfis nas Redes sociais (Facebook /McGuiOficial1 e Twitter @mcgui_oficial) possuem mais de 7 milhões de seguidores e tudo que envolve o MC Gui repercute de forma extraordinária entre os Adolescentes.</p>

 
 </div>
		<div class="pageContainer"><h2>Biografia</h2>
<p>Gui, ou Guilherme Kauê Castanheiras Alves, nasceu no dia 19 de maio de 1998, na cidade do Rio de Janeiro/Brasil e se mudou para a Zona Leste de São Paulo, onde vive atualmente com sua mãe, seu pai e seus irmãos mais velhos. MC Gui é um cantor e compositor de funk ostentação.</p>
<p>Apesar da fama que conquistou, sua carreira no funk teve um início despretensioso, incentivada por seu pai. Na época, com apenas 10 anos, Gui e um de seus irmãos brincavam de compor letras de funk e cantar suas músicas. A dedicação dos dois chamou a atenção do pai deles, que decidiu ajudar a lançar algumas das músicas do MC Gui. Seu primeiro sucesso veio com a música 'Ela Quer', o que o deu ânimo para continuar cantando. Logo, MC Gui já fazia dezenas de shows por mês e começava a ganhar seu espaço na cena do funk de São Paulo.</p>
<p>A fama estourou quando MC Gui lançou o hit 'O Bonde Passou', em 2013, ultrapassando a marca de 40 milhões de visualizações no Youtube. No ano seguinte, 2014, outras músicas do MC Gui fizeram sucesso. Uma delas, 'Beija Ou Não Beija?' contou com a participação do cantor Latino no clipe oficial. A outra foi 'Ostentar Esperança (Sonhar)', que foi escrita em homenagem a seu irmão Gustavo Castanheira, que faleceu no dia 21 de abril de 2014, vítima de uma parada cardíaca.</p>

</div>
<div class="pageContainer"><h2>Agenda</h2>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;height=559&amp;wkst=1&amp;bgcolor=%23999999&amp;src=blogvidaoffline%40gmail.com&amp;color=%23333333&amp;ctz=America%2FSao_Paulo" style=" border:solid 1px #777; width:100%; height:400px;" frameborder="0" scrolling="no"></iframe>
</div>
<div class="pageContainer"><h2>Loja</h2>
<p> Direcionando você para a Loja</p></div>
<div class="pageContainer"><h2>Fotos</h2> 
<!-- SnapWidget -->
<script src="http://snapwidget.com/js/snapwidget.js"></script>
<iframe src="http://snapwidget.com/in/?u=bWNndWlvZmljaWFsfGlufDUwMHw1fDl8fG5vfDV8ZmFkZUlufG9uU3RhcnR8bm98eWVz&ve=261114" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
<div style="padding-bottom:40px"></div>
</div>
<div class="pageContainer"><h2>Videos</h2> 
Em breve videos aqui
</div>
<div class="pageContainer"><h2>Contato</h2> 
<form action="contato.php" method="post" id="form" align="center">
				<label for="name">Nome</label><br/>
				<input type="text" name="name" id="name" />
		<br/>
				<label for="email">Email</label><br/>
				<input type="text" name="email" id="email" />
		<br/>
				<label for="subject">Assunto</label><br/>
				<input type="text" name="subject" id="subject" />
		<br/>
				<label for="message">Mensagem</label><br/>
				<textarea name="message" id="message" rows="30" cols="30"></textarea>
		<br/>
				<input type="submit" id="send_message" value="Enviar" />
	</form>
</div>
</article>
</section>
<!-- End Middle--> 
<!-- Start Footer-->
<footer id="footer">
		<div class="copyRight pageWidth" align="center">Orgulhosamente criado por <h3>Eduardo Mattos</h3></div>
</footer>
<!-- END Footer-->
</div>
</body>
</html>
