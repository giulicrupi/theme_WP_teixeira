<?php 


function pd_produtos_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );

		wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), filemtime(get_template_directory() . '/js/menu.js'), true);


	


	wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'boot-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'slick-carousel','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'fancybox-js','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
		// wp_enqueue_script( 'pointer-js','/wp-content/themes/Arqosv2/js/pointer.js');

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all' );
	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/css/galeria.css', array(), '4.4.1', 'all' );



wp_enqueue_style('730-style-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);


 	
 	
 	wp_enqueue_style( 'slick-css','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 	


 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700' );
 	


}
add_action( 'wp_enqueue_scripts', 'pd_produtos_scripts' );

add_theme_support('title-tag');





