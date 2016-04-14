<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/about-us.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'image-single'
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
		$animation = ff_load_section_printer('animation', $query);
		?>

		<div class="row">
		    <div class="col-sm-12">
		        <p class="text-center wow <?php echo esc_attr($animation); ?>">
		            <?php $image = ff_load_section_printer('image', $query); ?>
		        </p>
		    </div>
		</div>
	</div>
</section>


