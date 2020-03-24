<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>pagina 1 </title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/font-awesome.min.css">
	<link href="<?php echo INCLUDE_PATH;?>https://fonts.googleapis.com/css?family=Open+Sans:300, 400,700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descriçao do meu web site">
	<meta charset="utf-8"/>
</head>

<body>

	<?php

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				break;
			case 'servicos':
				echo '<target target="servicos" />';
				break;
				break;
		}
	?>
	<header>
		<div class="center">
		<div class="logo left"><i class="fa fa-ils fa-3x" aria-hidden="true"></i></div> <!--logo-->
		<nav class="desktop right">
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<div class="botao-menu-mobile">
				<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
			</div>
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
	</div> <!--center-->
	</header> <!--fim header-->

	<?php

		
		  if (file_exists('page/'.$url.'.php')) {
		  	include('page/'.$url.'.php');
		  } else {
		  	//podemos fazer o que quiser, pois a pagina nao existe
		  	if ($url != 'sobre' && $url != 'servicos') {		  
		  	$pagina404 = true;
		  	include('page/404.php');
		  }else{
		  	include('page/home.php');
		  }
		 }

	?>
	
	<footer <?php if(isset($pagina404) && $pagina404 == true) echo'class="fixa"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
			<p>Desenvolvido por Diego Hartwig Brandl</p>
		</div>
	</footer>

<script src="<?php echo INCLUDE_PATH;?>JavaScript/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH;?>JavaScript/scripts.js"></script>	
<?php
	if ($url == 'contato') {
?>		
<script src='https://www.google.com/maps/@-26.9351825,-49.132254,15z'></script>
<script scr= "<?php echo INCLUDE_PATH;?>JavaScript/map.js"></script>
	
 <?php } ?>
</body>
</html>