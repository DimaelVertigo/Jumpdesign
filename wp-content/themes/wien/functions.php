<?php
########################################################################################################################
# Welcome to "Wien" theme!
#=======================================================================================================================
# thank you for purchasing. This is a functions.php file. Here you can find any
# theme specific functions ( for example ajax calls, custom post types and
# other things ). Most of the other functions are located in our plugin
# Fresh Framework, which has to be activated in order to run this template
# without any problems.
########################################################################################################################
#																			                                           #
#																			                                           #
#																			                                           #
########################################################################################################################
# Framework Initialisation
#=======================================================================================================================
# this code initialise our fresh framework plugin. If the plugin is not
# presented, we run automatic installation which will result in installing
# and activating the plugin. Please do not change the framework initialisation ( lines 22 - 43 ), its complex
# and there is nothing you can gain by changing this
########################################################################################################################
require 'install/init.php';

if ( !class_exists('ffFrameworkVersionManager') && !is_admin() ) {
	echo '<span style="color:red; font-size:50px;">';
		echo __('The Fresh Framework plugin must be installed and activated in order to use this theme.', 'wien');
	echo '</span>';
	die();
} else if( !class_exists('ffFrameworkVersionManager') && is_admin() ) {
	if( !function_exists('ff_plugin_fresh_framework_notification') ) {
		function ff_plugin_fresh_framework_notification() {
			?>
			<div class="error">
				<p><?php echo __('Fresh themes require the Fresh Framework', 'wien'); ?></p>
			</div>
			<?php
		}
		add_action( 'admin_notices', 'ff_plugin_fresh_framework_notification' );
	}

	return;
}
require 'framework/init.php';

global $content_width;
if ( ! isset( $content_width ) ) $content_width = 1140;


########################################################################################################################
########################################################################################################################
########################################################################################################################
#
#
# !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
# SEE THIS BEFORE CUSTOMIZATION
# !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
#
# !!! Please note, that all options are cached. So if you change anything it the /templates/onePage structure, the
# changes will not appear, until you delete the wp-content/uploads/freshframework/cached_options folder. You can
# prevent caching by setting this constant in the "wp-config.php" file:
#
# define('FF_WP_DEBUG', true);
#
#
# We moved some of important functions out of the "functions.php" file, so you could easily override them in your child
# theme. For example different ajax requests, like sending contact form messages, ajax portfolio and other :-)
#
# Also all functions are wrapped by "function_exists", so when you use child theme, you can override these functions
# without getting errors. If you struggle with anything, just let us know please :)
#
#
########################################################################################################################


/**********************************************************************************************************************/
/* CSS AND JS INCLUDING
/**********************************************************************************************************************/
/*----------------------------------------------------------*/
/* CSS including
/*----------------------------------------------------------*/
if( !function_exists( 'ff_wp_enqueue_theme_styles') ) {
	function ff_wp_enqueue_theme_styles() {
		wp_enqueue_style('ff-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
		wp_enqueue_style('ff-font-awesome',get_template_directory_uri().'/assets/fontawesome/css/font-awesome.min.css');

		wp_enqueue_style('ff-fancybox',get_template_directory_uri().'/assets/js/fancybox/jquery.fancybox.css');

		wp_enqueue_style('ff-bx-slider',get_template_directory_uri().'/assets/js/bxslider/jquery.bxslider.css');
		wp_enqueue_style('ff-youtube-player',get_template_directory_uri().'/assets/js/ytplayer/css/YTPlayer.css');
		wp_enqueue_style('ff-animations',get_template_directory_uri().'/assets/js/animations/animate.min.css');
		wp_enqueue_style('ff-custom',get_template_directory_uri().'/assets/css/custom.css');

		// to ff-custom-page is bound inline style, please see ff_wp_enqueue_theme_google_fonts_styles()
		wp_enqueue_style('ff-custom-page',get_template_directory_uri().'/assets/css/pages-style.css');
		wp_enqueue_style('ff-style',get_template_directory_uri().'/style.css');

		ff_wp_enqueue_framework_icon_fonts_styles();
		ff_wp_enqueue_theme_google_fonts_styles();

	}

	add_action( 'wp_enqueue_scripts', 'ff_wp_enqueue_theme_styles' );
}

if( !function_exists( 'ff_wp_enqueue_framework_icon_fonts_styles') ) {
	function ff_wp_enqueue_framework_icon_fonts_styles() {
		$styleEnqueuer = ffContainer()->getStyleEnqueuer();

		$styleEnqueuer->addStyleFramework('ff-font-flaticon-mat', '/framework/extern/iconfonts/ff-font-flaticon-mat/ff-font-flaticon-mat.css');

		$iconfont_types = array(
			'brandico'    => '/framework/extern/iconfonts/ff-font-brandico/ff-font-brandico.css',
			'elusive'     => '/framework/extern/iconfonts/ff-font-elusive/ff-font-elusive.css',
			'entypo'      => '/framework/extern/iconfonts/ff-font-entypo/ff-font-entypo.css',
			'fontelico'   => '/framework/extern/iconfonts/ff-font-fontelico/ff-font-fontelico.css',
			'iconic'      => '/framework/extern/iconfonts/ff-font-iconic/ff-font-iconic.css',
			'linecons'    => '/framework/extern/iconfonts/ff-font-linecons/ff-font-linecons.css',
			'maki'        => '/framework/extern/iconfonts/ff-font-maki/ff-font-maki.css',
			'meteocons'   => '/framework/extern/iconfonts/ff-font-meteocons/ff-font-meteocons.css',
			'mfglabs'     => '/framework/extern/iconfonts/ff-font-mfglabs/ff-font-mfglabs.css',
			'modernpics'  => '/framework/extern/iconfonts/ff-font-modernpics/ff-font-modernpics.css',
			'typicons'    => '/framework/extern/iconfonts/ff-font-typicons/ff-font-typicons.css',
			'simple line icons' => '/framework/extern/iconfonts/ff-font-simple-line-icons/ff-font-simple-line-icons.css',
			'weathercons' => '/framework/extern/iconfonts/ff-font-weathercons/ff-font-weathercons.css',
			'websymbols'  => '/framework/extern/iconfonts/ff-font-websymbols/ff-font-websymbols.css',
			'zocial'      => '/framework/extern/iconfonts/ff-font-zocial/ff-font-zocial.css',
		);

		$iconfontQuery = ffThemeOptions::getQuery('iconfont');
		foreach ($iconfont_types as $name => $path) {
			if( $iconfontQuery->get( str_replace(' ', '_', $name) ) ){
				$styleEnqueuer->addStyleFramework( 'icon-option-font-' . str_replace(' ', '_', $name), $path);
			}
		}
	}
}

if( !function_exists( 'ff_wp_enqueue_theme_google_fonts_styles') ) {
	function ff_wp_enqueue_theme_google_fonts_styles() {

		$google_fonts_list = array();
		$styleEnqueuer = ffContainer()->getStyleEnqueuer();
		$wpLayer = ffContainer()->getWPLayer();
		$fontQuery = ffThemeOptions::getQuery('font');


		// Check if it is google font
		foreach( array( 'body', 'headers', 'buttons', 'navigation' ) as $font_selector ){
			$font_name = $fontQuery->get( $font_selector );
			if( FALSE !== strpos($font_name, ',') ){
				// THIS IS NOT GOOGLE FONT
				continue;
			}
			$font_name = str_replace("'", "", $font_name);
			$google_fonts_list[$font_name] = $font_name;
		}

		// Create google font CSS uri if possible
		if( ! empty( $google_fonts_list ) ){
			$font_url = add_query_arg( 'family', urlencode( implode('|',$google_fonts_list ).':300,400,600,700,300italic,400italic,600italic,700italic&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
			$styleEnqueuer->addStyle( 'ff-google-fonts', $font_url );
		}

		// Create inline style to fonts
		$wpLayer->wp_add_inline_style('ff-custom-page',
			ff_get_font_selectors('body')
			. '{font-family: '
			.  $fontQuery->get('body')
			. ', Helvetica, Arial, sans-serif; }'
			. "\n"
			.ff_get_font_selectors('headers')
			. '{font-family: '
			.  $fontQuery->get('headers')
			. ', Helvetica, Arial, sans-serif; }'
			. "\n"
			.ff_get_font_selectors('buttons')
			. '{font-family: '
			.  $fontQuery->get('buttons')
			. ', Helvetica, Arial, sans-serif; }'
			. "\n"
			.ff_get_font_selectors('navigation')
			. '{font-family: '
			.  $fontQuery->get('navigation')
			. ', Helvetica, Arial, sans-serif; }'
		);
	}
}

/*----------------------------------------------------------*/
/* JS including
/*----------------------------------------------------------*/
if( !function_exists( 'ff_wp_enqueue_theme_scripts') ) {
	function ff_wp_enqueue_theme_scripts() {


		wp_enqueue_script('ff-bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), null, true);

		// Viewport ads couple of extra selectors to jQuery. With these selectors you can check whether element is inside or outside of viewport.
		wp_enqueue_script('ff-viewport',get_template_directory_uri().'/assets/js/viewport/jquery.viewport.js', array('jquery'), null, true);

		// Menu
		wp_enqueue_script('ff-hover-intent',get_template_directory_uri().'/assets/js/menu/hoverIntent.js', null, null, true);
		wp_enqueue_script('ff-superfish',get_template_directory_uri().'/assets/js/menu/superfish.js', null, null, true);
		wp_enqueue_script('ff-sticky',get_template_directory_uri().'/assets/js/sticky/jquery.sticky.js', null, null, true);

		// lightbox
		wp_enqueue_script('ff-fancybox',get_template_directory_uri().'/assets/js/fancybox/jquery.fancybox.pack.js', array('jquery'), null, true);

		// Responsive jQuery Content Slider
		wp_enqueue_script('ff-bxslider',get_template_directory_uri().'/assets/js/bxslider/jquery.bxslider.min.js', array('jquery'), null, true);

		// Isotope - required only in:
		// templates/onePage/sections/blog-archive-masonry/blog-archive-masonry.php
		// templates/onePage/sections/portfolio-archive-filterable-2/portfolio-archive-filterable-2.php
		// templates/onePage/sections/portfolio-archive-masonry/portfolio-archive-masonry.php
		wp_register_script('ff-imagesloaded',get_template_directory_uri().'/assets/js/isotope/imagesloaded.pkgd.min.js', null, null, true);
		wp_register_script('ff-isotope-pkg',get_template_directory_uri().'/assets/js/isotope/isotope.pkgd.min.js', array('jquery','ff-imagesloaded'), null, true);

		// Contact form validation - required only in:
		// templates/onePage/sections/contact-form-1/contact-form-1.php
		// templates/onePage/sections/contact-form-2/contact-form-2.php
		wp_register_script('ff-validate',get_template_directory_uri().'/assets/js/validate/jquery.validate.min.js', array('jquery'), null, true);

		// Google Maps - required only in:
		// templates/onePage/sections/contact-form-2/contact-form-2.php
		// templates/onePage/sections/map/map.php
		wp_register_script('ff-google-maps-extern', 'http://maps.google.com/maps/api/js?sensor=false', null, null, true);
		wp_register_script('ff-google-maps',get_template_directory_uri().'/assets/js/googlemaps/jquery.gmap.min.js', array('jquery','ff-google-maps-extern'), null, true);

		// Pie charts - required only in:
		// templates/onePage/sections/fun-facts/fun-facts.php
		wp_register_script('ff-charts',get_template_directory_uri().'/assets/js/charts/jquery.easypiechart.min.js', array('jquery'), null, true);

		// Fun facts with counters - required only in:
		// templates/onePage/sections/fun-facts-with-counters/fun-facts-with-counters.php
		wp_register_script('ff-counter',get_template_directory_uri().'/assets/js/counter/jQuerySimpleCounter.js', array('jquery'), null, true);

		// Section Video Background - required only in:
		// templates/onePage/blocks/section-background/section-background.php
		wp_register_script('ff-ytp',get_template_directory_uri().'/assets/js/ytplayer/jquery.mb.YTPlayer.js', array('jquery'), null, true);


		wp_enqueue_script('ff-animations',get_template_directory_uri().'/assets/js/animations/wow.min.js', null, null, true);
		wp_enqueue_script('ff-custom',get_template_directory_uri().'/assets/js/custom.js', array('jquery'), null, true);

		if( ! post_password_required() ) {
			if ( comments_open() ){
				if ( 0 < get_comments_number() ) {
					wp_enqueue_script('comment-reply');
				}
			}
		}
	}

	add_action( 'wp_enqueue_scripts', 'ff_wp_enqueue_theme_scripts', 1 );
}

/**********************************************************************************************************************/
/* OTHER FILES LOADING
/**********************************************************************************************************************/
$ffFileSystem = ffContainer()->getFileSystem();

// TGM plugin installer
require_once "install/install-plugins-by-tgm.php";

// CUSTOMIZABLE THINGS
// ===================
// feel free to change these things in your child theme :-)

// ADD THEME SUPPORT AND OTHER STUFF
require $ffFileSystem->locateFileInChildTheme('/functions/customizable/theme-setup.php');

// CONTACT FORM ajax
require $ffFileSystem->locateFileInChildTheme('/functions/customizable/contact-form.php');

// SIDEBAR registration
require $ffFileSystem->locateFileInChildTheme('/functions/customizable/sidebar-registration.php');

// FONTS SELECTOR
require $ffFileSystem->locateFileInChildTheme('/functions/customizable/fonts.php');

// INTERNAL THINGS
// ===============
// please customize only if you are sure what are you doing :-)

// SECTIONS - internal
require $ffFileSystem->locateFileInChildTheme('/functions/internal/sections.php');

// LAYOUTS - internal
require $ffFileSystem->locateFileInChildTheme('/functions/internal/layouts.php');

// FONTS AND ICONS - internal
require $ffFileSystem->locateFileInChildTheme('/functions/internal/fonts-and-icons.php');

// JS CONSTANTS - internal
require $ffFileSystem->locateFileInChildTheme('/functions/internal/javascript-constants.php');

// THEME SPECIFIC FUNCTIONS
require $ffFileSystem->locateFileInChildTheme('/functions/internal/theme-specific.php');

// IMPORTANT FUNCTIONS WRAPPING WORDPRESS FUNCTIONS
require $ffFileSystem->locateFileInChildTheme('/functions/internal/wordpress-wrappers.php');

// EXTERNAL PLUGINS COMMUNICATION
require $ffFileSystem->locateFileInChildTheme('/functions/internal/external-plugins.php');
