<?php 


if (! function_exists('cbi_setup')) {
	function cbi_setup(){
		add_theme_support( 'custom-logo',[]);
		add_theme_support( 'post-thumbnails' );
	}
	add_action('after_setup_theme', 'cbi_setup');
}

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'cbi_scripts' );

function cbi_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array('main'), false);
	wp_enqueue_style( 'cbi', get_template_directory_uri() . '/assets/css/style.css', array('normalize'), false);
	wp_enqueue_style( 'glide_css', get_template_directory_uri() . '/assets/css/glide.core.min.css', array('cbi'), false);

	wp_enqueue_script( 'glide_js', get_template_directory_uri() . '/assets/js/glide.min.js', array(), false, true );
	wp_enqueue_script( 'micromodal_js', get_template_directory_uri() . '/assets/js/micromodal.min.js', array(), false, true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array('glide_js', 'micromodal_js'), false, true );
}


// Совет правления

add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'directors', [
		'labels' => [
			'name'               => __('Члены совета правления'), // основное название для типа записи
			'singular_name'      => __('Член совета правления'), // название для одной записи этого типа
			'add_new'            => __('Добавить нового'), // для добавления новой записи
			'add_new_item'       => __('Добавить члена совета правления'), // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => __('Редактирование члена совета'), // для редактирования типа записи
			'new_item'           => __('Новый член совета'), // текст новой записи
			'view_item'          => __('Смотреть члена совета'), // для просмотра записи этого типа.
			'search_items'       => __('Искать члена совета'), // для поиска по этим типам записи
			'not_found'          => __('Не найдено'), // если в результате поиска ничего не было найдено
			'not_found_in_trash' => __('Не найдено в корзине'), // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => __('Члены совета правления'), // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-universal-access-alt',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'news', [
		'labels' => [
			'name'               => __('Новости'), // основное название для типа записи
			'singular_name'      => __('Новость'), // название для одной записи этого типа
			'add_new'            => __('Добавить новую'), // для добавления новой записи
			'add_new_item'       => __('Добавить новость'), // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => __('Редактирование новости'), // для редактирования типа записи
			'new_item'           => __('Новая новость'), // текст новой записи
			'view_item'          => __('Смотреть новость'), // для просмотра записи этого типа.
			'search_items'       => __('Искать новость'), // для поиска по этим типам записи
			'not_found'          => __('Не найдено'), // если в результате поиска ничего не было найдено
			'not_found_in_trash' => __('Не найдено в корзине'), // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => __('Новости'), // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => false, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-megaphone',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'projects', [
		'labels' => [
			'name'               => __('Проекты'), // основное название для типа записи
			'singular_name'      => __('Проект'), // название для одной записи этого типа
			'add_new'            => __('Добавить новый'), // для добавления новой записи
			'add_new_item'       => __('Добавить проект'), // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => __('Редактирование проекта'), // для редактирования типа записи
			'new_item'           => __('Новый проект'), // текст новой записи
			'view_item'          => __('Смотреть проекты'), // для просмотра записи этого типа.
			'search_items'       => __('Искать проект'), // для поиска по этим типам записи
			'not_found'          => __('Не найдено'), // если в результате поиска ничего не было найдено
			'not_found_in_trash' => __('Не найдено в корзине'), // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => __('Проекты'), // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => false, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-list-view',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}



add_action( 'admin_menu', 'true_remove_default_menus' );
 
function true_remove_default_menus(){
 
	remove_menu_page( 'edit.php' );                   // Записи

	remove_menu_page( 'edit-comments.php' );          // Комментарии
	remove_menu_page( 'themes.php' );                 // Внешний вид
	// remove_menu_page( 'plugins.php' );                // Плагины
	remove_menu_page( 'users.php' );                  // Пользователи
 
}


