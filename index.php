<?php get_header(); ?>
<!--menu desktop-->
<nav id="menu-site">
	<div class="container">
		<a href="#" class="logo" title="DR Projetos - Arquitetura e Engenharia">DR PROJETOS</a>
		<ul>
			<li><a href="#">home</a></li>
			<li><a href="#who-we-are">quem somos</a></li>
			<li><a href="#architecture">arquitetura</a></li>
			<li><a href="#engineering">engenharia</a></li>
			<li><a href="#contact-form">contato</a></li>
		</ul>
	</div>
</nav>

<!--menu mobile-->
<nav id="menu-mobile">
		<span class="menu-anchor"><i class="fa fa-2x fa-bars"></i></span>
		<a href="#" class="logo" title="DR Projetos - Arquitetura e Engenharia">DR PROJETOS</a>
		<ul>
			<li><a href="#">home</a></li>
			<li><a href="#who-we-are">quem somos</a></li>
			<li><a href="#architecture">arquitetura</a></li>
			<li><a href="#engineering">engenharia</a></li>
			<li><a href="#contact-form">contato</a></li>
		</ul>
	</div>
</nav>


<section id="projects">
	<div class="container">
		<div class="row">
			<div class="row">
			<header class="col-xs-12">
				<h2>Conheça nossos projetos<br /><strong>arquitetura e engenharia</strong></h2>
			</header>
			</div>

			<div class="row">
				<div class="col-md-10 col-xs-12 center">
					<div class="row">
							
						<a href="#architecture">
							<figure class="col-md-6">
								<div class="project-thumbnail">
									<span><img src="<?php bloginfo('template_url') ?>/img/project_thumbnail.png" alt=""></span>
									<img src="<?php bloginfo('template_url') ?>/img/project-arquitetura.jpg">
								</div>
								<div class="row">
									<div class="category-project col-xs-12">
										<h3 class="architecture">Arquitetura</h3>
									</div>
								</div>
							</figure>
						</a>

						<a href="#engineering">
							<figure class="col-md-6">
								<div class="project-thumbnail">
									<span><img src="<?php bloginfo('template_url') ?>/img/project_thumbnail.png" alt=""></span>
									<img src="<?php bloginfo('template_url') ?>/img/project-engenharia.jpg">
								</div>
								<div class="row">
									<div class="category-project col-xs-12">
										<h3 class="engineering">Engenharia</h3>
									</div>
								</div>
							</figure>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="who-we-are">
	<div class="container">
		<div class="row">

			<article class="team col-md-8">
				<h2><?php $post_id = 22; 
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				echo $title;?></h2>
				<?php echo $queried_post->post_content ?>
			</article>

			<section class="team col-xs-12">
				<div class="row">

					<?php $args = array(
						'post_type' => 'membro',
						'orderby' => 'date',
						'order' => 'DESC',
						'posts_per_page' => '6'
						);
					?>

					<?php query_posts($args); ?>		
    				<?php if (have_posts()): while (have_posts()): the_post(); ?>

					<div class="col-md-2">
						<div class="member">
							<p><?php the_post_thumbnail("member-home"); ?></p>
							<p style="display: none;"><?php the_title(); ?></p>
							<?php the_content(); ?>
						</div>
					</div>

					<?php endwhile; ?>
					<?php endif; ?>


				</div>
			</section>

		</div>

	</div>

</section>

<section id="architecture" class="block-service">
	<div class="container">	
		<div class="row">

			<div class="infos">
				<article class="about col-md-6 col-sm-8">

					<h2><?php $post_id = 10; 
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					echo $title;?></h2>
					<?php echo $queried_post->post_content ?>

					<a href="<?php bloginfo('url') ?>/arquitetura/" class="more-projects">Ver todos</a>

				</article>

				<div class="services col-xs-12">
		
						<?php $args = array(
							'post_type' => 'projeto',
							'orderby' => 'date',
							'order' => 'DESC',
							'posts_per_page' => '4',
							'cat' => '2'
							);
						?>

						<?php query_posts($args); ?>		
	    				<?php if (have_posts()): while (have_posts()): the_post(); ?>

						<div class="col-md-3 post-project">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('small-project'); ?>
								<h4><?php the_title(); ?></h4>
							</a>
						</div>

						<?php endwhile; endif;?>				

				</div>
			</div>

		</div>
	</div>

</section>

<section id="engineering" class="block-service">
	<div class="container">
		<div class="row">
			<div class="infos">

				<article class="about col-md-6 col-sm-8">
					
					<h2><?php $post_id = 18; 
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					echo $title;?></h2>
					<?php echo $queried_post->post_content ?>


				</article>

				<div class="services col-xs-12">
				
					<!--categorias-->
					<div class="col-md-3 post-project">
						<a href="<?php bloginfo('url'); ?>/engenharia/estruturas/">
							<img src="<?php bloginfo('template_url') ?>/img/estruturas.jpg" alt="Estruturas" />
							<h4>Estruturas</h4>
						</a>
					</div>

					<div class="col-md-3 post-project">
						<a href="<?php bloginfo('url'); ?>/engenharia/eletrica/">
							<img src="<?php bloginfo('template_url') ?>/img/eletrica.jpg" alt="Elétrica" />
							<h4>Elétrica</h4>
						</a>
					</div>

					<div class="col-md-3 post-project">
						<a href="<?php bloginfo('url'); ?>/engenharia/hidraulica/">
							<img src="<?php bloginfo('template_url') ?>/img/hidraulica.jpg" alt="Hidráulica" />
							<h4>Hidráulica</h4>
						</a>
					</div>

					<div class="col-md-3 post-project">
						<a href="<?php bloginfo('url'); ?>/engenharia/sanitario/">
						<img src="<?php bloginfo('template_url') ?>/img/sanitario.jpg" alt="Sanitários" />
							<h4>Sanitários</h4>
						</a>
					</div>

					
				</div>
				
			</div>
		</div>
	</div>

</section>

<section id="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.717258581018!2d-46.322719285446!3d-23.398443684763944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce877ef337a6d7%3A0xeef59a4db8c5a331!2sR.+Ol%C3%A1vo+Bilac%2C+24+-+Jardim+Rincao%2C+Aruj%C3%A1+-+SP%2C+07432-575!5e0!3m2!1spt-BR!2sbr!4v1476473781538" frameborder="0" style="border:0;" allowfullscreen class="mapWrapper"></iframe>
			</div>
			<div class="box-contato col-md-6 col-sm-12">
				<h4>Solicite orçamento</h4>
				<p>Preencha o formulário abaixo para que nossa equipe entre em contato e ajude-o a encontrar a melhor solução em arquitetura ou engenharia</p>

				<form id="formcontato" method="post" action="<?php bloginfo('template_url') ?>/mail/send.php">
					<p><input type="text" name="nome" placeholder="Nome" required></p>
					<p><input type="text" name="email" placeholder="Email" required></p>
					<p><input type="text" name="telefone" placeholder="Telefone"></p>
					<p><textarea rows="4" name="msg" placeholder="Mensagem" required></textarea></p>

					<p class="call-to-action">
						<i class="fa fa-phone fa-3x"></i>
						<span class="call">ligamos<br />para você</span>
						<input type="submit" name="solicite" value="solicite" class="btn-site" />
						<div class="clearfix"></div>
					</p>
				</form>

			</div>

			<?php get_footer(); ?>

		</div>
	</div>
</section>

<script type="text/javascript">
	//Scroll para ID's
	$(function(){
		$('nav#menu-site a, nav#menu-mobile a, #projects a').click(function(e){
		$.scrollTo( this.hash || 0, 500);
		e.preventDefault();
		$('html').removeClass('menu-active');
		});
	});
</script>



</body>
</html>