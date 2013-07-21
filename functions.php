<?php
require_once locate_template("./lib/class-tgm-plugin-activation.php");

show_admin_bar( false );
add_theme_support( "post-thumbnails" );
add_action("wp_enqueue_scripts","styles_and_scripts");
function styles_and_scripts(){
	wp_enqueue_style( "bootstrap", "http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css", null,  false );
	wp_enqueue_style( "lato", "http://fonts.googleapis.com/css?family=Lato:400", null,  false  );
	wp_enqueue_style( "sourcesans", "http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900", null,  false );
	wp_enqueue_style( "appstyle", get_template_directory_uri() ."/css/style.css", null, false );
	wp_enqueue_style( "fontawesome", get_template_directory_uri(). "/css/font-awesome.css", false,  false );
	wp_enqueue_style( "responsiveslidercss", get_template_directory_uri() ."/css/responsiveslides.css", null,  false );

	wp_enqueue_script( "jquery" );
	// wp_enqueue_script( "modernizr");
	wp_enqueue_script( "modernizr","//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js", null,false,false);
	wp_enqueue_script( "prefixfree","//cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js", "jquery",false,true);
	wp_enqueue_script( "responsivesliderjs",get_template_directory_uri(). "/js/responsiveslides.js", "jquery",false,true);
	wp_enqueue_script( "scrollto",get_template_directory_uri(). "/js/jquery.scrollTo-1.4.3.1-min.js", "jquery",false,true);
	wp_enqueue_script( "appjs",get_template_directory_uri(). "/js/main.js", "jquery",false,true);
}

add_action( 'widgets_init', 'custom_footer' );
function custom_footer()  {
	$args0 = array(
		'id'            => 'dummy-area',
		'name'          => __('This has no Effect',"robowp"),
		'description'   => __('This has no Effect',"robowp"),
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '',
		'after_widget'  => '',
		);
	$args1 = array(
		'id'            => 'footer-left',
		'name'          => __('Footer Left',"robowp"),
		'description'   => __('Left side of the footer',"robowp"),
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '',
		'after_widget'  => '',
		);
	$args2 = array(
		'id'            => 'footer-right',
		'name'          => __('Footer Right',"robowp"),
		'description'   => __('Right side of the footer',"robowp"),
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '',
		'after_widget'  => '',
		);

	register_sidebar( $args1 );
	register_sidebar( $args2 );
}

function custom_posts() {

	$labels1 = array(
		'name'                => _x( 'Sliders', 'Post Type General Name', 'robowp' ),
		'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'robowp' ),
		'menu_name'           => __( 'Slider', 'robowp' ),
		'parent_item_colon'   => __( 'Parent Slider:', 'robowp' ),
		'all_items'           => __( 'All Sliders', 'robowp' ),
		'view_item'           => __( 'View Slider', 'robowp' ),
		'add_new_item'        => __( 'Add New Slider', 'robowp' ),
		'add_new'             => __( 'New Slider', 'robowp' ),
		'edit_item'           => __( 'Edit Slider', 'robowp' ),
		'update_item'         => __( 'Update Slider', 'robowp' ),
		'search_items'        => __( 'Search sliders', 'robowp' ),
		'not_found'           => __( 'No slider found', 'robowp' ),
		'not_found_in_trash'  => __( 'No sliders found in Trash', 'robowp' ),
		);
	$args1 = array(
		'label'               => __( 'slider', 'robowp' ),
		'description'         => __( 'Slider', 'robowp' ),
		'labels'              => $labels1,
		'supports'            => array( 'title', 'thumbnail', 'editor'),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		);
	register_post_type( 'slider', $args1 );

	$labels2 = array(
		'name'                => _x( 'Features', 'Post Type General Name', 'robowp' ),
		'singular_name'       => _x( 'Feature', 'Post Type Singular Name', 'robowp' ),
		'menu_name'           => __( 'Feature', 'robowp' ),
		'parent_item_colon'   => __( 'Parent Feature:', 'robowp' ),
		'all_items'           => __( 'All Features', 'robowp' ),
		'view_item'           => __( 'View Feature', 'robowp' ),
		'add_new_item'        => __( 'Add New Feature', 'robowp' ),
		'add_new'             => __( 'New Feature', 'robowp' ),
		'edit_item'           => __( 'Edit Feature', 'robowp' ),
		'update_item'         => __( 'Update Feature', 'robowp' ),
		'search_items'        => __( 'Search Features', 'robowp' ),
		'not_found'           => __( 'No Feature found', 'robowp' ),
		'not_found_in_trash'  => __( 'No Features found in Trash', 'robowp' ),
		);
	$args2 = array(
		'label'               => __( 'Feature', 'robowp' ),
		'description'         => __( 'Feature', 'robowp' ),
		'labels'              => $labels2,
		'supports'            => array( 'title', 'thumbnail', 'editor'),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		);
	register_post_type( 'feature', $args2 );

	$labels3 = array(
		'name'                => _x( 'Team Members', 'Post Type General Name', 'robowp' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'robowp' ),
		'menu_name'           => __( 'Team Member', 'robowp' ),
		'parent_item_colon'   => __( 'Parent Team Member:', 'robowp' ),
		'all_items'           => __( 'All Team Members', 'robowp' ),
		'view_item'           => __( 'View Team Member', 'robowp' ),
		'add_new_item'        => __( 'Add New Team Member', 'robowp' ),
		'add_new'             => __( 'New Team Member', 'robowp' ),
		'edit_item'           => __( 'Edit Team Member', 'robowp' ),
		'update_item'         => __( 'Update Team Member', 'robowp' ),
		'search_items'        => __( 'Search Team Members', 'robowp' ),
		'not_found'           => __( 'No Team Member found', 'robowp' ),
		'not_found_in_trash'  => __( 'No Team Members found in Trash', 'robowp' ),
		);
	$args3 = array(
		'label'               => __( 'Team Member', 'robowp' ),
		'description'         => __( 'Team Member', 'robowp' ),
		'labels'              => $labels3,
		'supports'            => array( 'title', 'thumbnail','editor' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		);
	register_post_type( 'team', $args3 );
}

// Hook into the 'init' action
add_action( 'init', 'custom_posts', 0 );

function register_connection_types() {
	p2p_register_connection_type( array(
		'name' => 'posts_to_pages',
		'from' => 'post',
		'to' => 'page'
		) );
	p2p_register_connection_type( array(
		'name' => 'slider_to_pages',
		'from' => 'slider',
		'to' => 'page'
		) );
	p2p_register_connection_type( array(
		'name' => 'team_to_pages',
		'from' => 'team',
		'to' => 'page'
		) );
	p2p_register_connection_type( array(
		'name' => 'feature_to_pages',
		'from' => 'feature',
		'to' => 'page'
		) );
}
add_action( 'p2p_init', 'register_connection_types' );


add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( !class_exists( 'cmb_Meta_Box' ) )
		require_once 'lib/metabox/init.php';

}

add_filter( 'cmb_meta_boxes', 'background_attachment' );

function background_attachment( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_robowp_';

	$meta_boxes[] = array(
		'id'         => 'bg_attachment',
		'title'      => 'Attach Background',
		'pages'      => array( 'post'), // Post type
		'context'    => 'side',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			
			array(
				'name' => 'Background',
				'desc' => __('Upload an image',"robowp"),
				'id' => $prefix . 'bg_image',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array(  'attachment' ) // limit to just attachments with array( 'attachment' )
				),
			));

	

	// Add other metaboxes as needed

	return $meta_boxes;
}

function rich_title($args){
	global $post;
	if(!is_admin()){
		return $mod = preg_replace("~\*([\S\s]+)\*~", "<span class='hcolor'>$1</span>", $args);
	}
	else
		return $args;
}

add_filter("the_title","rich_title");


/**
 * TGM Plugin Activation - WP Audio
 */
add_action( 'tgmpa_register', 'required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a theme
		array(
			'name'     				=> 'Google Maps Shortcode', // The plugin name
			'slug'     				=> 'wp-gmaps3-master', // The plugin slug (typically the folder name)
			'source'   				=> get_template_directory_uri() . '/lib/plugins/wp-gmaps3-master.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),array(
			'name'     				=> 'Posts 2 Posts', // The plugin name
			'slug'     				=> 'posts-to-posts', // The plugin slug (typically the folder name)
			'source'   				=> get_template_directory_uri() . '/lib/plugins/posts-to-posts.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),


			);

	// Change this to your theme text domain, used for internationalising strings
$theme_text_domain = 'robowp';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> "robowp",         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
			)
);

tgmpa( $plugins, $config );

}
?>