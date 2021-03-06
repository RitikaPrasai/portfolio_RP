<?php
/*
Plugin Name: SpiceBox
Plugin URI:
Description: Enhances SpiceThemes with extra functionality.
Version: 1.3.4
Author: Spicethemes
Author URI: https://spicethemes.com
Text Domain: spicebox
*/
define( 'SPICEB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SPICEB_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
error_reporting(0);
function spiceb_activate() {
	$theme = wp_get_theme(); // gets the current theme
	if ( 'SpicePress' == $theme->name || 'Rockers' == $theme->name || 'Content' == $theme->name  || 'Certify' == $theme->name || 'Stacy' == $theme->name || 'SpicePress Child Theme' == $theme->name || 'SpicePress Child' == $theme->name){

		//Alpha Color Control
		require_once('inc/controls/customizer-alpha-color-picker/class-spicepress-customize-alpha-color-control.php');
        require_once('inc/controls/customizer-image-radio-button/image_radio_button.php');
		require_once('inc/spicepress/features/feature-slider-section.php');
		require_once('inc/spicepress/features/feature-service-section.php');
		require_once('inc/spicepress/features/feature-portfolio-section.php');
		require_once('inc/spicepress/features/feature-testimonial-section.php');
		require_once('inc/spicepress/sections/spicepress-slider-section.php');
		require_once('inc/spicepress/sections/spicepress-features-section.php');
		require_once('inc/spicepress/sections/spicepress-portfolio-section.php');
		require_once('inc/spicepress/sections/spicepress-testimonail-section.php');
		require_once('inc/spicepress/customizer.php');

	}

	if ( 'HoneyPress' == $theme->name || 'HoneyPress Child' == $theme->name || 'Radix Multipurpose' == $theme->name || 'HoneyWaves' == $theme->name || 'Bizhunt' == $theme->name || 'Tromas' == $theme->name || 'HoneyBee' == $theme->name ){
		require_once('inc/honeypress/features/feature-slider-section.php');
		require_once('inc/honeypress/features/feature-service-section.php');
		require_once('inc/honeypress/features/feature-testimonial-section.php');
		require_once('inc/honeypress/sections/honeypress-slider-section.php');
		require_once('inc/honeypress/sections/honeypress-service-section.php');
		require_once('inc/honeypress/sections/honeypress-testimonail-section.php');
		require_once('inc/honeypress/customizer.php');
	}
	if ( 'CloudPress' == $theme->name || 'CloudPress Child' == $theme->name || 'CloudPress Agency' == $theme->name || 'CloudPress Business' == $theme->name){
		require_once('inc/cloudpress/features/feature-slider-section.php');
		require_once('inc/cloudpress/features/feature-cta-section.php');
		require_once('inc/cloudpress/features/feature-service-section.php');
		require_once('inc/cloudpress/features/feature-funfact-section.php');
		require_once('inc/cloudpress/sections/cloudpress-slider-section.php');
		require_once('inc/cloudpress/sections/cloudpress-cta-section.php');
		require_once('inc/cloudpress/sections/cloudpress-service-section.php');
		require_once('inc/cloudpress/sections/cloudpress-funfact-section.php');
		require_once('inc/cloudpress/customizer.php');
	}

	if ( 'CloudPress Agency' == $theme->name || 'CloudPress Business' == $theme->name){
	require_once('inc/controls/customizer-alpha-color-picker/class-spicepress-customize-alpha-color-control.php');
    require_once('inc/cloudpress/features/feature-testimonial-section.php');
    require_once('inc/cloudpress/sections/cloudpress-testimonail-section.php');
	}

	if ( 'Chilly' == $theme->name || 'SpiceBlue' == $theme->name){
    	require_once('inc/controls/customizer-alpha-color-picker/class-spicepress-customize-alpha-color-control.php');
		require_once('inc/spicepress/features/feature-service-section.php');
		require_once('inc/spicepress/features/feature-portfolio-section.php');
		require_once('inc/spicepress/features/feature-testimonial-section.php');
		require_once('inc/spicepress/sections/spicepress-features-section.php');
		require_once('inc/spicepress/sections/spicepress-portfolio-section.php');
		require_once('inc/spicepress/sections/spicepress-testimonail-section.php');
		require_once('inc/spicepress/customizer.php');
	}

    if ( 'Innofit' == $theme->name || 'Innofit Child' == $theme->name){


		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );


		if ( ! is_plugin_active( 'innofit-plus/innofit-plus.php' ) ):


			if ( ! function_exists( 'spiceb_innofit_customize_register' ) ) :
				function spiceb_innofit_customize_register($wp_customize){


					if(!empty(get_theme_mod('innofit_testimonial_content')))
					{
					$sections_customizer_data = array('slider','services','about','testimonial','team','news','callout','contact','subscriber','wooproduct');
					}
					else
					{
					$sections_customizer_data = array('slider','services','about','team','news','callout','contact','subscriber','wooproduct');
					}

					if(!empty(get_theme_mod('home_call_out_title')))
					{
					$sections_customizer_data = array('slider','services','about','testimonial','team','news','callout','contact','subscriber','wooproduct');
					}
					else
					{
					$sections_customizer_data = array('slider','services','about','team','news','contact','subscriber','wooproduct');
					}


					if(!empty(get_theme_mod('innofit_subscribe_title')))
					{
					$sections_customizer_data = array('slider','services','about','testimonial','team','news','callout','contact','subscriber','wooproduct');
					}
					else
					{
					$sections_customizer_data = array('slider','services','about','team','news','contact','wooproduct');
					}





				$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

				if (!empty($sections_customizer_data))
				{
					foreach($sections_customizer_data as $section_customizer_data)
					{
						require_once('inc/innofit/customizer/'.$section_customizer_data.'-section.php');
					}
				}
				$wp_customize->remove_control('header_textcolor');

			}
			add_action( 'customize_register', 'spiceb_innofit_customize_register' );
			endif;


			    $sections_data = array('slider','services','about','testimonial','team','news','callout','contact','subscriber','wooproduct');

				if (!empty($sections_data))
				{
					foreach($sections_data as $section_data)
					{
						require_once('inc/innofit/sections/innofit-'.$section_data.'-section.php');
					}
				}

			require_once('inc/innofit/customizer/customizer-render-callbacks.php');
			require_once('inc/innofit/customizer.php');


		endif;

	}


}
add_action( 'init', 'spiceb_activate' );


$theme = wp_get_theme();
if ( 'SpicePress' == $theme->name || 'Rockers' == $theme->name || 'Content' == $theme->name || 'Certify' == $theme->name || 'Stacy' == $theme->name || 'SpicePress Child Theme' == $theme->name || 'Chilly' == $theme->name || 'SpiceBlue' == $theme->name || 'SpicePress Child' == $theme->name){


register_activation_hook( __FILE__, 'spiceb_install_function');
function spiceb_install_function()
{
$item_details_page = get_option('item_details_page');
    if(!$item_details_page){
	require_once('inc/spicepress/default-pages/upload-media.php');
	require_once('inc/spicepress/default-pages/about-page.php');
	require_once('inc/spicepress/default-pages/home-page.php');
	require_once('inc/spicepress/default-pages/blog-page.php');
	require_once('inc/spicepress/default-pages/contact-page.php');
	require_once('inc/spicepress/default-pages/portfolio-page.php');
	require_once('inc/spicepress/default-widgets/default-widget.php');
	update_option( 'item_details_page', 'Done' );
    }
}

}


//Honeypress
if ( 'HoneyPress' == $theme->name || 'HoneyPress Child' == $theme->name || 'Radix Multipurpose' == $theme->name || 'HoneyWaves' == $theme->name || 'Bizhunt' == $theme->name || 'Tromas' == $theme->name || 'HoneyBee' == $theme->name ){
register_activation_hook( __FILE__, 'spiceb_install_function');
function spiceb_install_function()
{
$item_details_page = get_option('item_details_page');
    if(!$item_details_page){
	require_once('inc/honeypress/default-pages/upload-media.php');
	require_once('inc/honeypress/default-pages/home-page.php');
	require_once('inc/honeypress/default-pages/blog-page.php');
	require_once('inc/honeypress/default-widgets/default-widget.php');
	update_option( 'item_details_page', 'Done' );
    }
}
}

//CloudPress
if ( 'CloudPress' == $theme->name || 'CloudPress Child' == $theme->name || 'CloudPress Agency' == $theme->name || 'CloudPress Business' == $theme->name){
register_activation_hook( __FILE__, 'spiceb_cloudpress_install_function');
function spiceb_cloudpress_install_function()
{
$item_details_page = get_option('item_details_page');
    if(!$item_details_page){
	require_once('inc/cloudpress/default-pages/upload-media.php');
	require_once('inc/cloudpress/default-pages/home-page.php');
	require_once('inc/cloudpress/default-pages/blog-page.php');
	require_once('inc/cloudpress/default-widgets/default-widget.php');
	update_option( 'item_details_page', 'Done' );
    }
}
}

//Innofit
if ( 'Innofit' == $theme->name || 'Innofit Child' == $theme->name){

register_activation_hook( __FILE__, 'spiceb_install_function');
function spiceb_install_function()
{
$item_details_page = get_option('item_details_page');
    if(!$item_details_page){
	require_once('inc/innofit/default-pages/upload-media.php');
	require_once('inc/innofit/default-pages/home-page.php');
	require_once('inc/innofit/default-widgets/default-widget.php');
	require_once('inc/innofit/default-pages/home-custom-menu.php');
	update_option( 'item_details_page', 'Done' );
    }
}

}

//Metabox Seeting For Chilly Theme
if ( 'Chilly' == $theme->name )
{
require_once('inc/chilly/post-meta.php');
}

//Sanatize text
function spiceb_spicepress_home_page_sanitize_text( $input ) {

		return wp_kses_post( force_balance_tags( $input ) );

}

//Sanatize for honeypress theme
function spiceb_honeypress_home_page_sanitize_text( $input ) {

		return wp_kses_post( force_balance_tags( $input ) );

}

//Sanatize for CloudPress theme
function spiceb_cloudpress_home_page_sanitize_text( $input ) {

		return wp_kses_post( force_balance_tags( $input ) );

}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );


if ( ! is_plugin_active( 'innofit-plus/innofit-plus.php' ) ):

	function spiceb_innofit_home_page_sanitize_text( $input ) {

		return wp_kses_post( force_balance_tags( $input ) );

	}

endif;



if ('SpicePress' == $theme->name || 'Rockers' == $theme->name || 'Content' == $theme->name || 'Certify' == $theme->name || 'Stacy' == $theme->name || 'SpicePress Child Theme' == $theme->name || 'SpicePress Child' == $theme->name || 'Chilly' == $theme->name)
{
add_action( 'switch_theme', 'spicepresstheme_deactivate_message' );
	function spicepresstheme_deactivate_message()
	{
	    $theme = wp_get_theme();
	    if($theme->template!='spicepress'){
	    require_once('inc/feedback-pop-up-form.php');
	    }

	}
}
if ( 'Innofit' == $theme->name || 'Innofit Child' == $theme->name)
{
add_action( 'switch_theme', 'innofittheme_deactivate_message' );
	function innofittheme_deactivate_message()
	{
	    $theme = wp_get_theme();
	    if($theme->template!='innofit'){
	    require_once('inc/innofit-feedback-pop-up-form.php');
	    }

	}
}


add_action( 'init', 'spiceb_load_textdomain' );
/**
 * Load plugin textdomain.
 */
function spiceb_load_textdomain() {
  load_plugin_textdomain( 'spicebox', false, plugin_dir_url(__FILE__). 'languages' );

}
