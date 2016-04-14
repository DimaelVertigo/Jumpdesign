<?php
/**
 * @var ffOptionsQuery $query
 */


$_is_section_wrapped = $query->get('is-wrapped-by');
$_is_section_boxed = $query->get('is-boxed');

if( $_is_section_wrapped ){

	// Section Wrapper

	echo '<section';
	ff_load_section_printer(
		'section-fullwidth-wrapper'
		, $query->get('section-fullwidth-wrapper')
		, array(
			'class' => 'clearfix',
			'section'=>'html'
		)
	);
	echo '>';

	// Section Wrapper BG

	ff_load_section_printer(
		'section-background'
		, $query->get('section-fullwidth-wrapper background')
	);

	if( $_is_section_boxed ){
		// Section Container

		echo '<div';

		ff_load_section_printer(
			'section-boxed-wrapper'
			, $query->get('section-boxed-wrapper')
			, array(
				'boxed' => 1,
			)
		);

		echo '>';

		// Section Container BG

		ff_load_section_printer(
			'section-background'
			, $query->get('section-boxed-wrapper background')
		);
	}

	// Section Inner
	echo '<div class="section-inner">';
}


// Special section, that enable user to insert any HTML
echo do_shortcode($query->get('html'));


if( $_is_section_wrapped ){

	// Section Inner
	echo '</div>';

	if( $_is_section_boxed ){
		// Section Container
		echo '</div>';
	}

	// Section Wrapper
	echo '</section>';
}
