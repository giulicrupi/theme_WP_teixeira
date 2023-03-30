<?php 


function pd_produtos_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );



		wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), filemtime(get_template_directory() . '/js/menu.js'), true);


	


	
	wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script( 'awe','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js');    
	wp_enqueue_script( 'boot-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'slick-carousel','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'fancybox-js','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
		// wp_enqueue_script( 'pointer-js','/wp-content/themes/Arqosv2/js/pointer.js');

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all' );

	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/css/galeria.css', array(), '4.4.1', 'all' );



wp_enqueue_style('730-style-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);


 	wp_enqueue_script( 'flickity-js','https://flickity.metafizzy.co/flickity.pkgd.min.js');
 	
 	wp_enqueue_style( 'slick-css','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 	


 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900');
 	


}
add_action( 'wp_enqueue_scripts', 'pd_produtos_scripts' );

add_theme_support('title-tag');




// Create custom post type
function create_posttype() {
    register_post_type( 'produtos',
        array(
            'labels' => array(
                'name' => __( 'Produtos' ),
                'singular_name' => __( 'Produto' ),
				'menu_name' => _x('Produtos', 'admin menu'),
				'name_admin_bar' => _x('Produtos', 'admin bar'),
				'add_new' => _x('Adicionar Produtos', 'add new'),
				'add_new_item' => __('Adicionar Novo'),
				'new_item' => __('Novo Produto'),
				'edit_item' => __('Editar Produto'),
				'view_item' => __('Ver Produto'),
				'all_items' => __('Todos os Produtos'),
				'search_items' => __('Procurar Produtos'),
				'not_found' => __('Nenhum produto encontrado'),                
            ),
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'produto'),
            'taxonomies'  => array( 'produtos-categoria' ,'produtos-destaque'),
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'create_posttype', 9 );

//Create category for specific post type
function tr_create_my_taxonomy() {
    register_taxonomy(
        'produtos-categoria',
        'produtos',
        array(
            'label' => __( 'Categoria' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'produtos/categoria' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy', 6 );


//Create category for specific post type
function tr_create_my_taxonomy2() {
    register_taxonomy(
        'produtos-destaque',
        'produtos',
        array(
            'label' => __( 'Destaque' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'produtos/destaque' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy2', 7 );










add_action( 'init', 'my_custom_post_type_rest_support', 25 );
function my_custom_post_type_rest_support() {
    global $wp_post_types;
    //be sure to set this to the name of your post type!
    $post_type_name = 'produtos';
    if( isset( $wp_post_types[ $post_type_name ] ) ) {
        $wp_post_types[$post_type_name]->show_in_rest = true;
        // Optionally customize the rest_base or controller class
        $wp_post_types[$post_type_name]->rest_base = $post_type_name;
        $wp_post_types[$post_type_name]->rest_controller_class = 'WP_REST_Posts_Controller';
    }
}









