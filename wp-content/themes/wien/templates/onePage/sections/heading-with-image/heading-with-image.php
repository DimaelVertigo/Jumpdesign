<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'heading-with-image'
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
			'boxed' => 1,
		)
	);
	?>>
		<?php
		ff_load_section_printer( 'section-background', $query->get('section-boxed-wrapper background') );
		?>
		<div class="row">
			<?php
				foreach( $query->get('columns') as $oneColumn ) {
					$bootstrapClass = ff_load_section_printer('bootstrap-columns', $oneColumn );

					echo '<div class="'.esc_attr($bootstrapClass).'">';

					if( $oneColumn->getVariationType() == 'one-column-image') {

						$animation = ff_load_section_printer('animation', $oneColumn );

						echo '<p class="text-center wow '.esc_attr( $animation ).'" data-wow-iteration="2">';

							ff_load_section_printer('image', $oneColumn );

						echo '</p>';

					} else if( $oneColumn->getVariationType() == 'one-column-heading') {
						echo '<div class="headline headline-3">';
						ff_load_section_printer('heading-content', $oneColumn );
						echo '</div>';
					}

					echo '</div>';
				}
			?>
		</div>
	</div>
</section>
