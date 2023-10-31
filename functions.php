<?php


// Enqueue Normalize.css
function script_normalize() {

    wp_enqueue_style( 'css-normalize', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");

}
add_action( 'wp_enqueue_scripts', 'script_normalize' );


// Hook Widget
add_action( 'widgets_init', 'add_Widget_Support' );


// wp_enqueue_style( 'style', get_stylesheet_uri() );
function scripts_quitanda() {

    // // This will point to style.css in child theme
    // wp_enqueue_style( 'my_child_styles', get_stylesheet_directory_uri().'/style.css' );

    // // This will point to style.css in the parent theme
    // wp_enqueue_style( 'my_parent_styles', get_template_directory_uri().'/style.css' );

    // wp_enqueue_style( 'css-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/style.css', false, '1.1', 'all');
	// wp_enqueue_style( 'css-assets-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script-mobile.js', array( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'scripts_quitanda' );


// Setup Padrão do Tema Quitanda
if ( ! function_exists( 'theme_setup' ) ) :
	function theme_setup() {
        add_filter('use_block_editor_for_post', '__return_false', 10);
		add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );


// Nav Menu
function add_Main_Nav() {
    // register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menus( array(
        'menuHeaderEsq'   => __( 'Header PC Esquerdo', 'menuHE' ),
        'menuHeaderDir' => __( 'Header PC Direito', 'menuHD' ),
        'menuHeaderMob'   => __( 'Header Mobile', 'menuHM' ),
        'menuFooterPoliticas'   => __( 'Footer Políticas', 'menuFP' ),
        'menuFooterMain'   => __( 'Footer Principal', 'menuFM' )
    ) );
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );


// CPT RECEITAS

function content_receitas() {
    add_post_type_support( 'receitas', 'thumbnail' );  
	register_post_type('receitas',
		array(
			'labels'      => array(
				'name'          => __('Receitas', 'textdomain'),
				'singular_name' => __('Receita', 'textdomain'),
                'add_new'                  => __( 'Nova Receita', 'textdomain' ),
                'add_new_item'             => __( 'Adicionar Nova Receita', 'textdomain' ),
                'edit_item'                => __( 'Editar Receita', 'textdomain' ),
                'new_item'                 => __( 'Novas Receita', 'textdomain' ),
                'view_item'                => __( 'Ver', 'textdomain' ),
                'view_items'               => __( 'Ver Receitas', 'textdomain' ),
                'search_items'             => __( 'Buscar Receitas', 'textdomain' ),
                'not_found'                => __( 'Nada encontrado aqui!', 'textdomain' ),
                'not_found_in_trash'       => __( 'Nenhuma receita no lixo.', 'textdomain' ),
                'parent_item_colon'        => __( 'Parent Receitas:', 'textdomain' ),
                'all_items'                => __( 'All Receitas', 'textdomain' ),
                'archives'                 => __( 'Receitas no arquivo', 'textdomain' ),
                'attributes'               => __( 'Atributos das Receitas', 'textdomain' ),
                'insert_into_item'         => __( 'Inserir em Receitas', 'textdomain' ),
                'uploaded_to_this_item'    => __( 'Uploaded para esta Receita', 'textdomain' ),
                'featured_image'           => __( 'Featured Image', 'textdomain' ),
                'set_featured_image'       => __( 'Set featured image', 'textdomain' ),
                'remove_featured_image'    => __( 'Remove featured image', 'textdomain' ),
                'use_featured_image'       => __( 'Use as featured image', 'textdomain' ),
                'menu_name'                => __( 'Receitas', 'textdomain' ),
                'filter_items_list'        => __( 'Filter Receitas list', 'textdomain' ),
                'filter_by_date'           => __( 'Filter by date', 'textdomain' ),
                'items_list_navigation'    => __( 'Receitas list navigation', 'textdomain' ),
                'items_list'               => __( 'Receitas list', 'textdomain' ),
                'item_published'           => __( 'Receitas published.', 'textdomain' ),
                'item_published_privately' => __( 'Receitas published privately.', 'textdomain' ),
                'item_reverted_to_draft'   => __( 'Receitas reverted to draft.', 'textdomain' ),
                'item_scheduled'           => __( 'Receitas scheduled.', 'textdomain' ),
                'item_updated'             => __( 'Receitas updated.', 'textdomain' ),
                'item_link'                => __( 'Receitas Link', 'textdomain' ),
                'item_link_description'    => __( 'A link to an Receitas.', 'textdomain' ),
			),
            // 'menu_icon' => 'http://www.example.com/wp-content/uploads/2022/08/your-cpt-icon.png',
            
            'menu_icon' => get_template_directory_uri() . "/images/ico-receitas.png",
            'public'      => true,
            'has_archive' => true,
		),
);
}
add_action('init', 'content_receitas');




// Register Sidebar 'sidebar'
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'BarraLateral',
                    'id'            => 'sidebar_lateral',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}


// Remove Admin Bar Global
add_filter('show_admin_bar', '__return_false');


// Remove Admin Bar !admin]
add_action('after_setup_theme', 'remove_admin_bar');
        function remove_admin_bar() {
        if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}



?>