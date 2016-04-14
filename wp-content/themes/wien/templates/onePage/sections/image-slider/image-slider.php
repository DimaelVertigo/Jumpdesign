<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/portfolio-single.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'image-slider'
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
			<div class="col-sm-12">

				<div class="images-slider">
					<ul>
						<?php
						foreach($query->get('images') as $slide) {
							?>
							<li>
								<?php $image = ff_load_section_printer('image', $slide); ?>
							</li>
						<?php
						}
						?>
					</ul>
				</div>

			</div>
		</div>
	</div>
</section>