<?php get_header(); ?>

<div class="container">
	<div class="row">

		<section class="category-page">
			<div class="infos">

				<header class="col-xs-12">
					<div class="row">
						<div class="col-md-12">
							<nav class="breadcrumbs">
								<p>Você está em:</p>
								<ol>
									<li><a href="<?php bloginfo('url') ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
									<li><a href="<?php bloginfo('url') ?>/#engineering">Engenharia</a></li>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								</ol>
							</nav>
						</div>
						<div class="col-md-12">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</header>
					

				<div class="services col-xs-12">

					<div class="row">
						<?php $args = array(
							'post_type' => 'projeto',
							'orderby' => 'date',
							'order' => 'DESC',
							'posts_per_page' => '12',
							'cat' => '6',
							);
						?>
						<?php query_posts($args); ?>	
							
						<?php if (have_posts()): while (have_posts()): the_post(); ?>

						<div class="col-md-3 col-sm-6 post-project">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('small-project'); ?>
								<h2><?php the_title(); ?></h2>
							</a>
						</div>

						<?php endwhile; endif;?>
					</div>
					
				</div>
				
			</div>
		</section>
	</div>
</div>


<?php get_footer(); ?>

</body>
</html>