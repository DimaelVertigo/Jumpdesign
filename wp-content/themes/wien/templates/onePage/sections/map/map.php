<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/contact.html
 */

wp_enqueue_script('ff-google-maps');

?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'map'
	)
);
?>>
	<?php
	ff_load_section_printer(
		'section-background'
		, $query->get('section-fullwidth-wrapper background')
	);
	?>
	<div<?php
	ff_load_section_printer(
		'section-boxed-wrapper'
		, $query->get('section-boxed-wrapper')
		, array(
			'boxed' => $query->get('is-boxed'),
		)
	);
	?>>
		<?php
		ff_load_section_printer( 'section-background', $query->get('section-boxed-wrapper background') );


		$address = $query->get('address');
		$description = $query->get('description');

		$addressEscaped = htmlspecialchars( $address );
		$descriptionEscaped = htmlspecialchars( $description );

		$zoom = $query->get('zoom');

		?>

		<div class="map" data-zoom="<?php echo esc_attr($zoom);?>" data-address="<?php echo esc_attr($addressEscaped); ?>" data-description="<?php echo esc_attr($descriptionEscaped); ?>"></div>
	</div>
</section>