<?php
/**
 * PVD SIGNS Functions
 */

if ( ! function_exists( 'pvdsigns_setup' ) ) :

	function pvdsigns_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Add theme support for selective refresh for widgets.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 550,
			'flex-width'  => true,
			'flex-height' => true
		) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'home-menu-1' => esc_html__( 'Front Page Menu 1', 'pvdsigns' ),
			'home-menu-2' => esc_html__( 'Front Page Menu 2', 'pvdsigns' ),
		) );

		/**
		 * Enqueue scripts and styles.
		 */
		function pvdsigns_scripts() {
			wp_enqueue_style( 'pvdsigns-style', get_template_directory_uri() . '/style.css' );
		}
		add_action( 'wp_enqueue_scripts', 'pvdsigns_scripts' );

		/**
		 * Register widget area.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
		 */
		function pvdsigns_widgets_init() {
			register_sidebar( array(
				'name'          => esc_html__( 'Footer Widget', 'pvdsigns' ),
				'id'            => 'footer-widget',
				'before_widget' => '<div class="footer-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			) );
		}
		add_action( 'widgets_init', 'pvdsigns_widgets_init' );

		/**
		 * Register Neighborhood custom taxonomy.
		 *
		 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
		 */
		function pvdsigns_neighborhood_taxonomy() {

			$labels = array(
				'name' => _x( 'Neighborhoods', 'taxonomy general name' ),
				'singular_name' => _x( 'Neighborhood', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search Neighborhoods' ),
				'all_items' => __( 'All Neighborhoods' ),
				'parent_item' => __( 'Parent Neighborhood' ),
				'parent_item_colon' => __( 'Parent Neighborhood:' ),
				'edit_item' => __( 'Edit Neighborhood' ),
				'update_item' => __( 'Update Neighborhood' ),
				'add_new_item' => __( 'Add New Neighborhood' ),
				'new_item_name' => __( 'New Neighborhood Name' ),
				'menu_name' => __( 'Neighborhoods' ),
			);


			register_taxonomy( 'neighborhoods', array('post'), array(
				'hierarchical' => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'neighborhood' )
			));

		}

		add_action( 'init', 'pvdsigns_neighborhood_taxonomy', 0 );

	}

endif;
add_action( 'after_setup_theme', 'pvdsigns_setup' );
