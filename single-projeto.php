<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/slider-single.css">

<!--menu desktop-->
<nav id="menu-site">
	<div class="container">
		<a href="#" class="logo" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a>
		<ul>
			<li><a href="<?php bloginfo('url') ?>">home</a></li>
			<li><a href="<?php bloginfo('url') ?>/#who-we-are">quem somos</a></li>
			<li><a href="<?php bloginfo('url') ?>/#architecture">arquitetura</a></li>
			<li><a href="<?php bloginfo('url') ?>/#engineering">engenharia</a></li>
			<li><a href="<?php bloginfo('url') ?>/#contact-form">contato</a></li>
		</ul>
	</div>
</nav>

<!--menu mobile-->
<nav id="menu-mobile">
		<span class="menu-anchor"><i class="fa fa-2x fa-bars"></i></span>
		<a href="#" class="logo" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a>
		<ul>
			<li><a href="<?php bloginfo('url') ?>/">home</a></li>
			<li><a href="<?php bloginfo('url') ?>/#who-we-are">quem somos</a></li>
			<li><a href="<?php bloginfo('url') ?>/#architecture">arquitetura</a></li>
			<li><a href="<?php bloginfo('url') ?>/#engineering">engenharia</a></li>
			<li><a href="<?php bloginfo('url') ?>/#contact-form">contato</a></li>
		</ul>
	</div>
</nav>


<section class="box-projeto">
		<div class="container">
			<div class="projeto">

    				<?php if (have_posts()): while (have_posts()): the_post(); ?>

						<div class="row">

							<div class="col-xs-12">
								<h1><?php the_title(); ?></h1>
							</div>

							<div class="col-md-7 col-sm-12 slider-single">

								<!---galeria-->
								<div class="swiper-container gallery-top">
									<div class="swiper-wrapper">
										<div class="swiper-slide"><img src="<?php the_field('imagem_destacada_1'); ?>" /></div>
										<div class="swiper-slide"><img src="<?php the_field('imagem_destacada_2'); ?>" /></div>
										<div class="swiper-slide"><img src="<?php the_field('imagem_destacada_3'); ?>" /></div>
									</div>
							        <div class="swiper-button-next swiper-button-white"></div>
							        <div class="swiper-button-prev swiper-button-white"></div>
								</div>

								<!---galeria-->
								<div class="swiper-container gallery-thumbs">
									<div class="swiper-wrapper">
										<div class="swiper-slide"><img src="<?php the_field('imagem_destacada_1'); ?>" /></div>
										<div class="swiper-slide"><img src="<?php the_field('imagem_destacada_2'); ?>" /></div>
										<div class="swiper-slide"><img src="<?php the_field('imagem_destacada_3'); ?>" /></div>
									</div>
								</div>


							</div>


							<article class="col-md-5 content-description">
								<h5>Descrição</h5>
								<div><?php the_content(); ?></div>
							</article>

						</div>
							

						<footer class="row sub-infos">

							<div class="col-md-3">
								<h5>Ficha técnica</h5>
								<p><?php the_field('ficha_tecnica') ?></p>
							</div>

							<div class="col-md-3">
								<h5>Equipe</h5>
								<p><?php the_field('equipe') ?></p>
							</div>

							<div class="col-md-3">
								<h5>Colaboradores</h5>
								<p><?php the_field('colaboradores') ?></p>
							</div>


							<div class="col-md-3">
								<h5>Engenharia</h5>
								<p><?php the_field('engenharia') ?></p>
							</div>

						</footer>

				<?php endwhile; endif;?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>


<script type="text/javascript">
var galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    loop:true,
    loopedSlides: 3, //looped slides should be the same     
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 3,
    touchRatio: 0.2,
    loop:true,
    loopedSlides: 3, //looped slides should be the same
    slideToClickedSlide: true
});
galleryTop.params.control = galleryThumbs;
galleryThumbs.params.control = galleryTop;

</script>


</body>
</html>

