<?php

if( !function_exists('ff_boostrap_grid_translator')) {
	function ff_boostrap_grid_translator($numberOfParts)
	{
		return (int)(12 / $numberOfParts);
	}
}

if( !function_exists('ff_boostrap_grid_translator')) {
	function ff_boostrap_grid_translator()
	{
		global $post;
		if (strpos($post->post_content, '<!--more-->') === false) {
			return false;
		} else {
			return true;
		}
	}
}

if( !class_exists( 'ffTemporaryQueryHolder' ) ) {
	class ffTemporaryQueryHolder
	{
		private static $_queries = array();

		public static function setQuery($name, $query)
		{
			self::$_queries[$name] = $query;
		}

		public static function getQuery($name)
		{
			if (isset(self::$_queries[$name])) {
				return self::$_queries[$name];
			} else {
				return null;
			}
		}

		public static function deleteQuery($name)
		{
			unset(self::$_queries[$name]);
		}
	}
}

if( !function_exists('ff_get_all_portfolio_tags')) {
	function ff_get_all_portfolio_tags($numberOfPosts = 0)
	{
		$portfolioTagsArray = array();

		$postCounter = 0;
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				$postCounter++;

				if ($numberOfPosts > 0 && $postCounter > $numberOfPosts) {
					break;
				}


				global $post;
				$t = wp_get_post_terms($post->ID, 'ff-portfolio-tag');
				if (!empty($t)) foreach ($t as $onePortfolioTag) {
					$portfolioTagsArray[$onePortfolioTag->slug] = $onePortfolioTag;
				}
			}
		}
		rewind_posts();
		// Escaped HTML with tags
		return $portfolioTagsArray;
	}
}

if( !function_exists('ff_get_all_tags_for_one_portfolio_item')) {
	function ff_get_all_tags_for_one_portfolio_item()
	{
		global $post;

		return wp_get_post_terms($post->ID, 'ff-portfolio-tag');
	}
}

################################################################################
# USER DATA ESCAPING FUNCTION
################################################################################
if( !function_exists('ff_wp_kses') ) {
// Sorry I know that this is ugly global variable, but I want to call
// this function just once

	global $__ff__wp_kses_allowed_html;
	$__ff__wp_kses_allowed_html = wp_kses_allowed_html('post');

	function ff_wp_kses( $html ){
		global $__ff__wp_kses_allowed_html;
		$html = wp_kses( $html, $__ff__wp_kses_allowed_html );
		return $html;
	}
}

if( function_exists('vc_disable_frontend') ){
	vc_disable_frontend();
}
if( !function_exists('ff_has_read_more') ) {
	function ff_has_read_more()
	{
		global $post;
		if (strpos($post->post_content, '<!--more-->') === false) {
			return false;
		} else {
			return true;
		}
	}
}


if( !function_exists('ff_theme_accent_color_hex') ) {
	function ff_theme_accent_color_hex() {
		$mainColor = '';

		if( ffThemeOptions::getQuery('layout use-picker') ) {
			$mainColor = ffThemeOptions::getQuery('layout color');
		} else {
			$skin = ffThemeOptions::getQuery('layout accent');

			switch( $skin ) {
				case 'default':
					$mainColor = '#bca480';
					break;
				case 'yellow':
					$mainColor = '#e3ac4e';
					break;
				case 'green':
					$mainColor = '#a0ce4e';
					break;
				case 'blue':
					$mainColor = '#74b2ff';
					break;
			}
		}

		return $mainColor;
	}
}

add_action('admin_footer', 'ff_import_notice');

function ff_import_notice() {

	if( ffContainer()->getRequest()->get('import') == 'wordpress' ){
		$listOfActivePlugins = ffContainer()->getPluginLoader()->getActivePluginClasses();

		if( !isset( $listOfActivePlugins['p-wien-core'] ) && !isset( $listOfActivePlugins['wien-core'] )  ) {
			?>
			<script>
				jQuery(document).ready(function($){
					var htmlToInsert = '';

					htmlToInsert += '<div style="background-color:red; color:white; padding: 20px; margin: 20px 0;">';
						htmlToInsert += 'Before you can start using the Wien theme, you need to activate the Wien Theme Core plugin first.';
					htmlToInsert += '<div>';


					$('.wrap h2').after( htmlToInsert );

					$('#import-upload-form').hide();
					$('.narrow').hide();
				});
			</script>
			<?php
		}

	}


}


/**********************************************************************************************************************/
/* EXCLUDE REVOLUTION SLIDER JS FROM MINIFICATION
/**********************************************************************************************************************/
if( !function_exists('ff_theme_banned_js_minification') ) {

	function ff_theme_banned_js_minification( $bannedFiles ) {

		if( !is_array( $bannedFiles ) ) {
			$bannedFiles = array();
		}
		$bannedFiles = array_merge( array('tp-tools', 'revmin'), $bannedFiles);

		return( $bannedFiles );
	}

	add_action('ff_performance_cache_banned_js', 'ff_theme_banned_js_minification');

}