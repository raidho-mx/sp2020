<?php get_header();?>

<!-- BLOQUE HERO IMAGE -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 hero-img pt-100 pb-100" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');"></div>
		</div>
	</div>
</section>

<!-- BLOQUE CONTENIDO DE ENTRADA -->
<section class="pt-5 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center  max-w-760 m-auto">
				<p class="txt36 c-dark-blue w-100 mb-4 is-black"><strong><?php the_title(); ?></strong></p>
				<p class="w-100 pb-4"><span class="c-2C2C2E">Enero 28, 2020</span> |
					<?php
					$terms = get_the_terms( $post->ID , array( 'category') );
						// init counter
						$i = 1;
						foreach ( $terms as $term ) {
							$term_link = get_term_link( $term, array( 'category') ); ?>
							<a href="<?php echo $term_link; ?>" class="c-blue is-bold"><?php echo $term->name; ?></a>
						<?php }
					?>
				</p>
			</div>
			<div class="col-12 has-content txt24 max-w-760 m-auto">
				<?php if( get_field('iframe') ): ?>
					<div class="video-wrap mb-4">
						<?php the_field('iframe'); ?>
					</div>
				<?php endif; ?>
				<?php the_field('content'); ?>
			</div>
		</div>
	</div>
</section>

<!-- BLOQUE ENTRADAS RECIENTES -->
<section class="pb-100">
	<div class="container">
		<div class="row pb-4">
			<?php
				$Blog = new WP_Query( array(
					'post_type' => 'post',
					'posts_per_page' => 6,
					'post__not_in' => array( $post->ID ),
				));
				if ( $Blog->have_posts() ) : ?>
					<div class="col-12 text-center pb-md-5 pb-3">
						<h2 class="c-blue txt24 mb-4"><strong>Entradas recientes</strong></h2>
					</div>
				<?php while ( $Blog->have_posts() ) : $Blog->the_post();  ?>
					<div class="col-md-4 mb-md-0 mb-4">
						<a href="<?php the_permalink();?>">
							<div class="img-card-rectangle mb-2" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');"></div>
						</a>
						<?php
						$terms = get_the_terms( $post->ID , array( 'category') );
							// init counter
							$i = 1;
							foreach ( $terms as $term ) {
								$term_link = get_term_link( $term, array( 'category') ); ?>
								<a href="<?php echo $term_link; ?>" class="d-block is-bold c-blue txt18 pb-2"><?php echo $term->name; ?></a>
							<?php }
						?>
						<a href="<?php the_permalink();?>">
							<p class="is-bold c-dark-blue txt24 mb-2"><?php the_title(); ?></p>
							<p class="c-dark-gray text-capitalize"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="row justify-content-center pt-md-5">
			<a href="<?php echo get_home_url(); ?>/entradas" class="has-btn bg-blue">Ver todas las entradas</a>
		</div>
	</div>
</section>

<?php get_footer();?>
