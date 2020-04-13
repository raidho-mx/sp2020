<?php
	$termID = get_queried_object()->term_id;
	$termSlug = get_term( $termID )->slug;
	$termName = get_term( $termID )->name;

	get_header();
?>


<?php if( has_term( 'testimoniales', 'category' ) ) { ?>
	<!-- SI ENCUENTRA POSTS DE TESTIMONIALES -->
	<!-- BLOQUE TODAS LAS ENTRADAS -->
	<section class="pb-100">
		<div class="container">
			<div class="row">
				<div class="col-12 pt-100 pb-md-5 pb-3">
					<h2 class="c-black txt24 mb-4"><strong>Entradas relacionadas de: <?php echo $termName; ?></strong></h2>
				</div>
			</div>
			<div class="row pb-4">
				<?php
					$Blog = new WP_Query( array(
						'post_type' => 'post',
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'terms' => 'testimoniales',
								'field' => 'slug',
							)
						),
						'posts_per_page' => -1
					));
					if ( $Blog->have_posts() ) :
					$a = 0; ?>
					<?php while ( $Blog->have_posts() ) : $Blog->the_post(); ?>
						<div class="col-md-4 mb-md-0 mb-4 cursor-pointer" data-toggle="modal" data-target="#ModalVideo<?php echo ++$a; ?>">
							<div class="img-card-rectangle mb-2" style="background-image: url('<?php the_post_thumbnail_url( 'small' ); ?>');"></div>
							<p class="d-block is-bold c-blue txt18 pb-2">Testimoniales</p>
							<p class="is-bold c-dark-blue txt24 mb-2"><?php the_title(); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>


	<?php
		$Blog = new WP_Query( array(
			'post_type' => 'post',
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'terms' => 'testimoniales',
					'field' => 'slug',
				)
			),
			'posts_per_page' => -1
		));
		if ( $Blog->have_posts() ) :
		$b = 0; ?>
		<?php while ( $Blog->have_posts() ) : $Blog->the_post(); ?>
			<div class="modal fade dark-mask" id="ModalVideo<?php echo ++$b; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content bg-dark-gray p-4 border-0 border-12px">
						<div class="w-100">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-close-white.svg" alt="">
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-4 pl-lg-5 d-flex mb-md-0 mb-4">
									<div class="w-100 mt-auto mb-auto text-md-left text-center">
										<p class="c-CDCDCD mb-3"><strong>Testimoniales</strong></p>
										<p class="c-white txt24 mb-md-4 mb-3"><strong><?php the_title(); ?></strong></p>
										<div class="c-white"><?php the_field('content'); ?></div>
									</div>
								</div>
								<div class="col-md-8 pr-md-5">
									<div class="video-wrap">
										<?php the_field('iframe'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

<?php } else { ?>
	<!-- SI ENCUENTRA OTROS POSTS -->
	<!-- BLOQUE TODAS LAS ENTRADAS -->
	<section class="pb-100">
		<div class="container">
			<div class="row">
				<div class="col-12 pt-100 pb-md-5 pb-3">
					<h2 class="c-black txt24 mb-4"><strong>Entradas relacionadas de: <?php echo $termName; ?></strong></h2>
				</div>
			</div>
			<div class="row pb-4">
				<?php
					$Blog = new WP_Query( array(
						'post_type' => 'post',
						'tax_query' => array(
						    array(
						        'taxonomy' => 'category',
						        'terms' => $termID,
						        'field' => 'term_id',
						    )
						),
						'posts_per_page' => -1
					));
					if ( $Blog->have_posts() ) : ?>
					<?php while ( $Blog->have_posts() ) : $Blog->the_post(); ?>
						<div class="col-md-4 mb-md-0 mb-4">
							<a href="<?php the_permalink();?>">
								<div class="img-card-rectangle mb-2" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');"></div>
							</a>
							<a href="<?php the_permalink();?>" class="d-block is-bold c-blue txt18 pb-2">
								<?php echo $termName; ?>
							</a>
							<a href="<?php the_permalink();?>">
								<p class="is-bold c-dark-blue txt24 mb-2"><?php the_title(); ?></p>
								<p class="c-dark-gray"><?php get_the_date( 'D M j' ); ?></p>
							</a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php } ?>

<!-- EXPLORA POR CATEGORÍAS -->
<section class="pb-100">
	<div class="container">
		<div class="row justify-content-center">
			<p class="c-dark-blue txt24">Explora por categorías</p>
			<div class="col-12 pt-5 d-flex justify-content-center">
				<?php
				$terms = get_terms(  'category' );
					// init counter
					$i = 1;
					foreach ( $terms as $term ) {
						$term_link = get_term_link( $term, array( 'category') );
						if( is_wp_error( $term_link ) )
						continue;?>
						<a href="<?php echo $term_link; ?>" class="has-btn has-sm-btn bg-blue mr-2"><?php echo $term->name; ?></a>
					<?php }
				?>
			</div>
		</div>
	</div>
</section>

<!-- BLOQUE PRODUCTOS -->
<section class="bg-light-gray pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center pb-100">
				<p class="c-dark-blue txt36 is-black">Nuestros productos</p>
			</div>
			<div class="col-md-6 mb-md-0 mb-4">
				<div class="w-100 h-100 bg-white border-14 p-4 text-center pb-5 has-md-shadow">
					<div class="overlaped-img-center mb-md-0 mb-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-blog1.svg" alt="icono inversión 6">
					</div>
					<h3 class="txt36 c-dark-gray mb-md-4 mb-3"><strong>Inversión</strong></h3>
					<p class="txt24 c-dark-gray mb-md-4 mb-3">Invierte desde 1 peso o hasta 5 millones con súper tasas de hasta el 11% anual.</p>
					<a href="#" class="has-btn bg-blue c-white m-auto">Ver todos</a>
				</div>
			</div>
			<div class="col-md-6 mb-md-0 mb-4">
				<div class="w-100 h-100 bg-white border-14 p-4 text-center pb-5 has-md-shadow">
					<div class="overlaped-img-center mb-md-0 mb-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-blog2.svg" alt="icono inversión 6">
					</div>
					<h3 class="txt36 c-dark-gray mb-md-4 mb-3"><strong>Crédito</strong></h3>
					<p class="txt24 c-dark-gray mb-md-4 mb-3">Te prestamos hasta 200 mil pesos para liquidar tus tarjetas de crédito con tasas súper atractivas.</p>
					<a href="#" class="has-btn bg-blue c-white m-auto">Ver todos</a>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer();?>
