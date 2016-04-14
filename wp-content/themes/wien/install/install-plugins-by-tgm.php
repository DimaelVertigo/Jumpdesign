<?php

require_once get_template_directory() . '/install/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'oxygen_theme_register_required_plugins' );

function oxygen_theme_register_required_plugins() {

	$plugins = array(

		array(
			'name' => 'Wien Theme Core Plugin',
			'slug' => 'wien-core',
			'source' => get_template_directory() . '/install/zips/wien-core.zip',
			'required' => false,
		),
		array(
			'name' => 'Revolution Slider',
			'slug' => 'revslider',
			'source' => get_template_directory() . '/install/zips/revslider.zip',
			'required' => false,
		),
		array(
			'name' => 'Visual Composer',
			'slug' => 'js_composer',
			'source' => get_template_directory() . '/install/zips/js_composer.zip',
			'required' => false,
		),
		array(
			'name' => 'Fresh Custom Code',
			'slug' => 'fresh-custom-code',
			'source' => get_template_directory() . '/install/zips/fresh-custom-code.zip',
			'required' => false,
		),
		array(
			'name' => 'Fresh Custom Loops',
			'slug' => 'fresh-custom-loops',
			'source' => get_template_directory() . '/install/zips/fresh-custom-loops.zip',
			'required' => false,
		),
		array(
			'name' => 'Fresh File Editor',
			'slug' => 'fresh-file-editor',
			'source' => get_template_directory() . '/install/zips/fresh-file-editor.zip',
			'required' => false,
		),
		array(
			'name' => 'Fresh Performance Cache',
			'slug' => 'fresh-performance-cache',
			'source' => get_template_directory() . '/install/zips/fresh-performance-cache.zip',
			'required' => false,
		),
		array(
			'name' => 'Fresh Scrollbar',
			'slug' => 'fresh-scrollbar',
			'source' => get_template_directory() . '/install/zips/fresh-scrollbar.zip',
			'required' => false,
		),
		array(
			'name' => 'Fresh Sidebar Manager',
			'slug' => 'fresh-sidebar-manager',
			'source' => get_template_directory() . '/install/zips/fresh-sidebar-manager.zip',
			'required' => false,
		),

	);

	$config = array(
		'default_path' => '',                      // Default absolute path to pre-packaged plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		'strings'      => array(
		)
	);

	tgmpa( $plugins, $config );

}