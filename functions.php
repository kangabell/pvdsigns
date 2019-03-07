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
			wp_enqueue_style( 'pvdsigns-style', get_template_directory_uri() . '/library/screen.css' );
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
				'show_in_rest' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'neighborhood' )
			));

		}

		add_action( 'init', 'pvdsigns_neighborhood_taxonomy', 0 );


		/**
		 * Make ACF 'Related Items' field bidirectional
		 *
		 * @link https://www.advancedcustomfields.com/resources/bidirectional-relationships
		 */

		function pvdsigns_acf_bidirectional( $value, $post_id, $field  ) {

			$field_name = $field['name'];
			$field_key = $field['key'];
			$global_name = 'is_updating_' . $field_name;

			if( !empty($GLOBALS[ $global_name ]) ) return $value;

			$GLOBALS[ $global_name ] = 1;

			if( is_array($value) ) {

				foreach( $value as $post_id2 ) {

					$value2 = get_field($field_name, $post_id2, false);

					if( empty($value2) ) {
						$value2 = array();
					}

					if( in_array($post_id, $value2) ) continue;

					$value2[] = $post_id;

					update_field($field_key, $value2, $post_id2);

				}

			}

			$old_value = get_field($field_name, $post_id, false);

			if( is_array($old_value) ) {

				foreach( $old_value as $post_id2 ) {

					if( is_array($value) && in_array($post_id2, $value) ) continue;

					$value2 = get_field($field_name, $post_id2, false);

					if( empty($value2) ) continue;

					$pos = array_search($post_id, $value2);

					unset( $value2[ $pos] );

					update_field($field_key, $value2, $post_id2);

				}

			}

			$GLOBALS[ $global_name ] = 0;

			return $value;

		}

		add_filter('acf/update_value/name=related_items', 'pvdsigns_acf_bidirectional', 10, 3);

	}

endif;
add_action( 'after_setup_theme', 'pvdsigns_setup' );
