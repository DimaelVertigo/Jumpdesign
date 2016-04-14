<?php

/**********************************************************************************************************************/
/* NOTIFICATION HIDE
/**********************************************************************************************************************/
if( !function_exists('ff_external_plugins_notification_removal') ) {
    function ff_external_plugins_notification_removal() {
        echo '<style>.rs-update-notice-wrap, .vc_license-activation-notice {display:none;}</style>';
    }
    add_action('admin_print_styles', 'ff_external_plugins_notification_removal');
}

// disable product key notification

// Revolution slider:
if( function_exists('set_revslider_as_theme') ){
	set_revslider_as_theme();
}

// Visual Composer:
if( function_exists('vc_set_as_theme') ) {
	vc_set_as_theme(true);
}




