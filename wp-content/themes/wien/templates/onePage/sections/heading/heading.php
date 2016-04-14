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
		'section'=>'heading'
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
		ff_load_section_printer('heading-wrapped', $query->get('heading'));
		?>
	</div>
</section>
