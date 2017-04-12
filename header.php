<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php if ( is_single() ) {single_post_title('', true);} else {bloginfo('description');}?>">

		<title><?php bloginfo('name') ?></title>

		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/swiper.min.css">		
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">

		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">

		<?php wp_head(); ?>


	</head>
<body>

<header id="top-site">
	<a href="<?php bloginfo('url') ?>"><h1 title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></h1></a>	
</header>

<?php
	//Aqui vamos verificar em qual página está, se for a home ele insere apenas os IDs, se for diferente vamos inserir o link do site antes
	if (is_home()) {
		$menu = array(
			'home' => '#',
			'quemsomos' => '#who-we-are',
			'arquitetura' => '#architecture',
			'engenharia' => '#engineering',
			'contato' => '#contact-form'
		);
	} else {
		$menu = array(
			'home' => get_bloginfo('url').'',
			'quemsomos' => get_bloginfo('url').'/#who-we-are',
			'arquitetura' => get_bloginfo('url').'/#architecture',
			'engenharia' => get_bloginfo('url').'/#engineering',
			'contato' => get_bloginfo('url').'/#contact-form'
		);
	}
?>

<!--menu desktop-->
<nav id="menu-site">
	<div class="container">
		<a href="#" class="logo" title="<?php echo get_bloginfo('name') ?>">DR PROJETOS</a>
		<ul>
			<li><a href="<?php echo $menu['home'] ?>">home</a></li>
			<li><a href="<?php echo $menu['quemsomos'] ?>">quem somos</a></li>
			<li><a href="<?php echo $menu['arquitetura'] ?>">arquitetura</a></li>
			<li><a href="<?php echo $menu['engenharia'] ?>">engenharia</a></li>
			<li><a href="<?php echo $menu['contato'] ?>">contato</a></li>
		</ul>
	</div>
</nav>

<!--menu mobile-->
<nav id="menu-mobile">
		<span class="menu-anchor"><i class="fa fa-2x fa-bars"></i></span>
		<a href="<?php echo $menu['home'] ?>" class="logo" title="<?php echo get_bloginfo('name') ?>">DR PROJETOS</a>
		<ul>
			<li><a href="<?php echo $menu['home'] ?>">home</a></li>
			<li><a href="<?php echo $menu['quemsomos'] ?>">quem somos</a></li>
			<li><a href="<?php echo $menu['arquitetura'] ?>">arquitetura</a></li>
			<li><a href="<?php echo $menu['engenharia'] ?>">engenharia</a></li>
			<li><a href="<?php echo $menu['contato'] ?>">contato</a></li>
		</ul>
	</div>
</nav>

