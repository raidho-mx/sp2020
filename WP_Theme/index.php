<?php get_header();?>

<!-- BLOQUE HERO IMAGE -->
<section>
	<div class="container-fluid">
		<?php
		$post_object = get_field('featured_post');
		if( $post_object ):
			// override $post
			$post = $post_object;
			setup_postdata( $post );
			?>
			<div class="row pl-sm-4 pr-sm-4">
				<div class="col-12 bg-img pt-100 pb-100" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
					<div class="bg-white-opacity text-center m-auto h-100 d-flex max-w-840 pt-md-5 pb-md-5">
						<div class="p-5 mt-auto mb-auto w-100">
							<p class="c-blue txt24 pb-3"><b>SuperFinanzas</b></p>
							<h1 class="c-dark-blue txt36 pb-md-4 pb-3"><b><?php the_title(); ?></b></h1>
							<a href="<?php the_permalink(); ?>" class="has-btn has-md-btn c-white bg-blue">Leer más</a>
						</div>
					</div>
				</div>
			</div>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>
</section>

<!-- BLOQUE FILTRAR ENTRADAS -->
<section class="pt-100 pb-100">
	<div class="container">
		<div class="row text-center max-w-840 m-auto">
			<p class="txt24 c-blue w-100 mb-4"><strong>Blog</strong></p>
			<p class="txt36 c-dark-blue pb-4">Compartimos contigo nuestras mejores prácticas de ahorro y lo último en noticias. </p>
			<p class="c-dark-blue w-100 pb-4">Explora entradas por categorías:</p>
			<?php
			// Get the current queried object
			$term    = get_queried_object();
			$term_id = ( isset( $term->term_id ) ) ? (int) $term->term_id : 0;

			$categories = get_categories( array(
				'taxonomy'   => 'category', // Taxonomy to retrieve terms for. We want 'category'. Note that this parameter is default to 'category', so you can omit it
				'orderby'    => 'name',
				'parent'     => 0,
				'hide_empty' => 0, // change to 1 to hide categores not having a single post
			) );
			?>
			<select class="has-blue-select m-auto" id="inputGroupSelect01"  onchange="if (this.value) window.location.href=this.value">
				<option selected>Categorías</option>
				<?php
					foreach ( $categories as $category ) {
					$cat_ID        = (int) $category->term_id;
					$category_name = $category->name; ?>
					<option value="<?php echo get_site_url(); ?>/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
					<?php
				} ?>
			</select>
		</div>
	</div>
</section>

<!-- BLOQUE ENTRADAS RECIENTES -->
<section class="pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center pb-md-5 pb-3">
				<h2 class="c-blue txt24 mb-4"><strong>Entradas recientes</strong></h2>
			</div>
		</div>
		<div class="row pb-4">
			<?php
				$Blog = new WP_Query( array(
					'post_type' => 'post',
					'posts_per_page' => 6,
					'tax_query' => array(
					    array(
					        'taxonomy' => 'category',
					        'terms' => 'testimoniales',
					        'field' => 'slug',
							'operator' => 'NOT IN',
					    )
					),
				));
				if ( $Blog->have_posts() ) : ?>
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

<!-- BLOQUE VIDEOS -->
<?php
$page_id = get_queried_object_id();
if( get_field('featured_video', $page_id) ): ?>

<section class="pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 bg-2C2C2E p-md-5 p-4 border-14px">
				<div class="has-slider slider-video has-white-arrows">
					<?php
					$post_objects = get_field('featured_video', $page_id);
					if( $post_objects ): ?>
						<?php foreach( $post_objects as $post_object): ?>
							<div>
								<div class="row">
									<div class="col-md-4 pl-lg-5 d-flex mb-md-0 mb-4">
										<div class="w-100 mt-auto mb-auto text-md-left text-center">
											<p class="c-CDCDCD mb-3"><strong>Testimoniales</strong></p>
											<p class="c-white txt24 mb-md-4 mb-3"><strong><?php echo get_the_title($post_object->ID); ?></strong></p>
											<a href="<?php echo get_template_directory_uri(); ?>/category/testimoniales" class="has-btn bg-white c-black">Ver todos</a>
										</div>
									</div>
									<div class="col-md-8 pr-md-5">
										<div class="video-wrap">
											<?php the_field('iframe', $post_object->ID); ?>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>

<!-- BLOQUE PRODUCTOS -->
<section class="bg-light-gray pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center pb-100">
				<p class="c-dark-blue txt36 is-black pb-md-3">Nuestros productos</p>
			</div>
			<div class="col-md-6 mb-md-0 mb-4">
				<div class="w-100 h-100 bg-white border-14 p-4 text-center pb-5 has-md-shadow">
					<div class="overlaped-img-center mb-md-0 mb-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-blog1.svg" alt="icono inversión 6">
					</div>
					<h3 class="txt36 c-dark-gray mb-md-4 mb-3"><strong>Inversión</strong></h3>
					<p class="txt24 c-dark-gray mb-md-4 mb-3">Invierte desde $1 peso o hasta $5 millones<br> con SUPER tasas de hasta el<br>11% anual.</p>
					<a href="#" class="has-btn bg-blue c-white m-auto">Ver todos</a>
				</div>
			</div>
			<div class="col-md-6 mb-md-0 mb-4">
				<div class="w-100 h-100 bg-white border-14 p-4 text-center pb-5 has-md-shadow">
					<div class="overlaped-img-center mb-md-0 mb-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-blog2.svg" alt="icono inversión 6">
					</div>
					<h3 class="txt36 c-dark-gray mb-md-4 mb-3"><strong>Crédito</strong></h3>
					<p class="txt24 c-dark-gray mb-md-4 mb-3">Te prestamos hasta $200 mil pesos <br>para liquidar tus tarjetas de crédito </br>con tasas SUPER atractivas.</p>
					<a href="#" class="has-btn bg-blue c-white m-auto">Ver todos</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>
