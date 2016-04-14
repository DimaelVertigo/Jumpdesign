<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/index.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'who-we-are-with-slider'
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
		ff_load_section_printer(
			'section-background'
			, $query->get('section-boxed-wrapper background')
		);

		ff_load_section_printer('heading-wrapped', $query);
		?>
		<div class="row">
			<div class="col-sm-4">
				<p class="lead"><?php echo ff_wp_kses($query->get('one-text main')); ?></p>
			</div>
			<div class="col-sm-8">
				<div class="services-slider">
					<ul>
						<?php foreach( $query->get('slider') as $oneSlider ) { ?>
							<li>
								<div class="services-boxes style-3">
									<i class="<?php echo esc_attr($oneSlider->getIcon('icon')); ?>"></i>
									<div class="services-boxes-content">
										<p><?php echo ff_wp_kses($oneSlider->get('description')); ?></p>
									</div>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>