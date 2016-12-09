<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php if ( is_single() ) {single_post_title('', true);} else {bloginfo('description');}?>">
		<title><?php bloginfo('name') ?></title>

		<?php wp_head(); ?>

		<!-- Bootstrap -->
		<link href="<?php bloginfo('template_url') ?>/css/main.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/swiper.min.css">
		
		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.scrollTo.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/swiper.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/swiper.jquery.min.js"></script>

		<!--Google Analytics-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-86848573-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</head>
<body>

<header id="top-site">
	<a href="<?php bloginfo('url') ?>"><h1 title="<?php bloginfo('name') ?>">DR PROJETOS</h1></a>	
</header>
