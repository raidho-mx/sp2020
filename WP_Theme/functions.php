<?php
//The Raws


/*------------------------------------*\
Clickjacking protection
Add header to stop site loading in an iFrame.
\*------------------------------------*/


	function mwtsn_example_send_headers() {
		header( 'X-FRAME-OPTIONS: SAMEORIGIN' );
	}
	add_action( 'send_headers', 'mwtsn_example_send_headers', 10 );



/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/


/* Proper way to enqueue scripts and styles */

	function the_supertasas_enqueue() {
		wp_enqueue_style( 'ResetGrid', get_template_directory_uri() . '/css/reset-grid.css');
		wp_enqueue_style( 'Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
		wp_enqueue_style( 'FontAwesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
		wp_enqueue_style( 'Google Material Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
		wp_enqueue_style( 'Reset', get_template_directory_uri() . '/css/reset.css');
		wp_enqueue_style( 'Index', get_template_directory_uri() . '/css/index.css');

		// GENERAL
		wp_enqueue_script( 'FancyBoxJS', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js', array('jquery'), '0.1', true );
		wp_enqueue_script( 'Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '0.1', true );
		wp_enqueue_script( 'BootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '0.1', true );
		wp_enqueue_script( 'Slickjs', get_template_directory_uri() . '/js/slick.min.js'  , array('jquery'), '', true );
		wp_enqueue_script( 'Magic', get_template_directory_uri() . '/js/scripts.js',  array('jquery'), '', true  );

	}
	add_action( 'wp_enqueue_scripts', 'the_supertasas_enqueue' );


/* Add options pages */

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Opciones Generales',
			'menu_title'	=> 'Opciones',
			'menu_slug' 	=> 'general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}



/* Allow .SVG */

	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');



/* Cambiar Entradas a Descubre */

		function change_post_label() {
			global $menu;
			global $submenu;
			$menu[5][0] = 'Blog';
		}
		add_action( 'admin_menu', 'change_post_label' );

/* Add theme support for Featured Images */
	add_theme_support('post-thumbnails', array( 'post', 'proyectos', 'page'));
