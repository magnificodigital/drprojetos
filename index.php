<?php get_header(); ?>

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
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.8209367484233!2d-46.32974106188951!3d-23.394694259795624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce87835c5159dd%3A0xb5fa9085f3064ae9!2sAv.+Jo%C3%A3o+Manoel%2C+600+-+Center+Ville%2C+Aruj%C3%A1+-+SP%2C+07432-575!5e0!3m2!1spt-BR!2sbr!4v1487013626897" frameborder="0" style="border:0" allowfullscreen class="mapWrapper"></iframe>
			</div>
			<div class="box-contato col-md-6 col-sm-12">
				<h4>Solicite orçamento</h4>
				<p>Preencha o formulário abaixo para que nossa equipe entre em contato e ajude-o a encontrar a melhor solução em arquitetura ou engenharia</p>

				<form id="formcontato" method="post">
					<p><input type="text" name="nome" placeholder="Nome"></p>
					<p><input type="text" name="email" placeholder="Email"></p>
					<p><input type="text" name="telefone" class="telefone" placeholder="Telefone"></p>
					<p><textarea rows="4" name="msg" placeholder="Mensagem"></textarea></p>

					<div class="resposta"></div>

					<p class="call-to-action">
						<i class="fa fa-phone fa-3x"></i>
						<span class="call">ligamos<br />para você</span>
						<button id="enviaform" type="button" name="solicite" class="btn-site">solicite</button>
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
			$.scrollTo(this.hash || 0, 500);
			e.preventDefault();
			$('html').removeClass('menu-active');
		});
	});
</script>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('.telefone').mask("(99) 9999-9999");
	});

</script>

<script type="text/javascript">
	window.sr = ScrollReveal({
		origin: 'center',
		//distance: '20px',
		duration: 1000,
		delay: 0,
		rotate: { x: 0, y: 0, z: 0 },
		opacity: 0,
		scale: 1,
		//easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
		//container: window.document.documentElement,
		mobile: true,
		reset: false,

		// 'always' — delay for all reveal animations
		// 'once'   — delay only the first time reveals occur
		// 'onload' - delay only for animations triggered by first load
		useDelay: 'always',

		// Change when an element is considered in the viewport. The default value
		// of 0.20 means 20% of an element must be visible for its reveal to occur.
		viewFactor: 0.2,

		// Pixel values that alter the container boundaries.
		// e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
		// --
		// Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
		viewOffset: { top: 0, right: 0, bottom: 0, left: 0 },
	});

	sr.reveal('#engineering .services');
	sr.reveal('#architecture .services');
	sr.reveal('section.team');

</script>

</body>
</html>