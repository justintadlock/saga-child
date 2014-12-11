<?php
/**
 * @package    ThemeName
 * @author     Your Name <you@youremailprovider.com>
 * @copyright  Copyright (c) 2014, Your Name
 * @link       http://themehybrid.com/themes/theme-slug
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Add the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'themeslug_theme_setup' );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
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
	 * Filter to add custom default backgrounds. Remove this section and its corresponding function 
	 * if you do not wish to use it.
	 */
	//add_filter( 'hybrid_default_backgrounds', 'themeslug_default_backgrounds' );

	/*
	 * Add a custom default icon for the "header_icon" option. Remove this section and its 
	 * corresponding function if you do not wish to use it.
	 */
	add_filter( 'theme_mod_header_icon', 'themeslug_header_icon' );

	/*
	 * Add a custom default color for the "menu" color option. Remove this section and its 
	 * corresponding function if you do not wish to use it.
	 */
	add_filter( 'theme_mod_color_menu', 'themeslug_color_menu' );

	/*
	 * Add a custom default color for the "primary" color option. Remove this section and its 
	 * corresponding function if you do not wish to use it.
	 */
	add_filter( 'theme_mod_color_primary', 'themeslug_color_primary' );
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
