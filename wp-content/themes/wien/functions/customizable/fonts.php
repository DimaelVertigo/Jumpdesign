<?php

if( !function_exists('ff_get_font_selectors') ) {
	function ff_get_font_selectors($font)
	{
		switch ($font) {
			case 'body'   :
				return 'body, .price-plan-heading h1 sup, .price-plan-heading h1 small';
			case 'headers':
				return 'h1, h2, h3, h4, h5, h6, .lead, .panel-title a, .panel-title a:focus, .counter-value, .testimonial blockquote, .filter, .pagination, .breadcrumb, .tp-caption.title, .tp-caption.bigtitle, .tp-caption.smalltitle, .tp-caption.text, .tp-caption.link a, .widget, .widget_search input[type="text"], .widget_categories ul, .widget_categories-dropdown select, .widget_archive ul, .widget_archive select, .widget_pages ul, .widget_meta ul, .widget_tags a, .widget-newsletter input[type="text"], .widget_recent_entries, .widget_recent_comments, .widget_contact ul, .blog-article blockquote, .comment-author .fn, .comment-metadata a, .reply, #commentform label, #contact-form label';
			case 'buttons':
				return '.btn';
			case 'navigation' :
				return 'header .menu li a, #mobile-menu li a ';
		}
		return '';
	}
}