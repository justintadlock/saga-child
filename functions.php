<?php
/**
 * This is your theme's `functions.php` file.  It's a dangerous but really powerful tool.  It essentially 
 * gives you the power of a plugin developer from within the confines of a theme.  Use this feature 
 * wisely, please.
 *
 * Make sure to change the `themeslug_` function prefix to a prefix that matches your theme name.  For 
 * example, if your theme name is "Super Duper", your slug should be `super_duper_`. 
 *
 * @package    ThemeName
 * @author     Your Name <you@youremailprovider.com>
 * @copyright  Copyright (c) 2014, Your Name
 * @link       http://yoursite.com/link/to/theme
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Always set up theme on the `after_setup_theme` hook. */
add_action( 'after_setup_theme', 'themeslug_theme_setup' );

/**
 * Theme setup function.  This is where the theme should register things like headers and add its 
 * callback functions for action/filter hooks.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function themeslug_theme_setup() {

	/*
	 * Add a custom background to overwrite the defaults.  Remove this section if you want to use 
	 * the parent theme defaults instead.
	 *
	 * @link http://codex.wordpress.org/Custom_Backgrounds
	 */
	add_theme_support(
		'custom-background',
		array(
			'default-color' => '151515',
			'default-image' => '',
		)
	);

	/*
	 * Add a custom header to overwrite the defaults.  Remove this section if you want to use the 
	 * the parent theme defaults instead.
	 *
	 * @link http://codex.wordpress.org/Custom_Headers
	 */
	add_theme_support( 
		'custom-header', 
		array(
			'default-text-color' => 'dadada',
			'default-image'      => '',
			'random-default'     => false,
		)
	);

	/*
	 * Registers default headers for the theme.  If you don't want to add custom headers, remove 
	 * this section. Note: Header thumbnail sizes should be 230x78.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_default_headers
	 */
	//register_default_headers();

	/*
	 * Uncomment to add custom default backgrounds.  See the `themeslug_default_backgrounds()` 
	 * function below.  Remove this section and that function if you do not wish to use this feature.
	 */
	//add_filter( 'hybrid_default_backgrounds', 'themeslug_default_backgrounds' );

	/*
	 * Uncomment to add a custom default icon for the "header_icon" option.  See the 
	 * `themeslug_header_icon()` function below.  Remove this section and that function if you 
	 * do not wish to use this feature.
	 */
	//add_filter( 'theme_mod_header_icon', 'themeslug_header_icon' );

	/*
	 * Uncomment to add a custom default color for the "menu" color option. See the 
	 * `themeslug_color_menu` function below.  Remove this section and that function if you 
	 * do not wish to use this feature.
	 */
	//add_filter( 'theme_mod_color_menu', 'themeslug_color_menu' );

	/*
	 * Uncomment to add a custom default color for the "primary" color option. See the 
	 * `themeslug_color_primary` function below.  Remove this section and that function if you 
	 * do not wish to use this feature.
	 */
	//add_filter( 'theme_mod_color_primary', 'themeslug_color_primary' );
}

/**
 * This works just like the WordPress `register_default_headers()` function.  You're just setting up an 
 * array of backgrounds.  The following backgrounds are merely examples from the parent theme.  Please 
 * don't use them.  Use your own backgrounds.  Or, remove this section (and the `add_filter()` call earlier) 
 * if you don't want to register custom backgrounds.
 *
 * Note: Background thumbnail sizes should be 230x78.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $backgrounds
 * @return array
 */
function themeslug_default_backgrounds( $backgrounds ) {

	$new_backgrounds = array(
		'example-1' => array(
			'url'           => '%2$s/images/backgrounds/example-1.png',
			'thumbnail_url' => '%2$s/images/backgrounds/example-1-thumb.png',
		),
		'example-2' => array(
			'url'           => '%2$s/images/backgrounds/example-2.png',
			'thumbnail_url' => '%2$s/images/backgrounds/example-2-thumb.png',
		),
	);

	return array_merge( $new_backgrounds, $backgrounds );
}

/**
 * Change the default header icon option.  Users can overwrite this from the theme customizer, so we want 
 * to make sure to check that the value is set to 'default' before returning our custom icon.  If you want 
 * to use the parent theme's default, remove this section of the code and the `add_filter()` call from 
 * earlier.  Otherwise, plug in the icon handle for the icon you'd like to use (the below is the parent 
 * theme default).
 *
 * Note: Icons are handled by the Font Awesome font.  You can use any icon from this font by changing the 
 * icon name from 'fa-iconname' to 'icon-iconname'.  You can find all available icons via the Font Awesome 
 * page: http://fontawesome.io/icons
 *
 * @since  1.0.0
 * @access public
 * @param  string  $hex
 * @return string
 */
function themeslug_header_icon( $icon ) {
	return 'default' === $icon ? 'icon-pencil' : $icon;
}

/**
 * Add a default custom color for the theme's "menu" color option.  Users can overwrite this from the 
 * theme customizer, so we want to make sure to check that there's no value before returning our custom 
 * color.  If you want to use the parent theme's default, remove this section of the code and the 
 * `add_filter()` call from earlier.  Otherwise, just plug in the 6-digit hex code for the color you'd like 
 * to use (the below is the parent theme default).
 *
 * @since  1.0.0
 * @access public
 * @param  string  $hex
 * @return string
 */
function themeslug_color_menu( $hex ) {
	return $hex ? $hex : 'e74c3c';
}

/**
 * Add a default custom color for the theme's "primary" color option.  Users can overwrite this from the 
 * theme customizer, so we want to make sure to check that there's no value before returning our custom 
 * color.  If you want to use the parent theme's default, remove this section of the code and the 
 * `add_filter()` call from earlier.  Otherwise, just plug in the 6-digit hex code for the color you'd like 
 * to use (the below is the parent theme default).
 *
 * @since  1.0.0
 * @access public
 * @param  string  $hex
 * @return string
 */
function themeslug_color_primary( $hex ) {
	return $hex ? $hex : 'e74c3c';
}
