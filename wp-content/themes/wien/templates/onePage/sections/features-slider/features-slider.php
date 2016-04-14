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
		'section'=>'features-slider'
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
		ff_load_section_printer('heading-wrapped', $query);
		?>
		<div class="row">
			<div class="col-sm-12">
				<div class="features-slider">
					<ul>
						<?php
							foreach ( $query->get('slider') as $slider ) {
							$picture = $slider->getImage('image');
							$pictureResized = fImg::resize($picture->url, 430, 410, true);
						?>
							<li>
								<div class="row">
										<div class="col-sm-5">
											<img src="<?php echo esc_url($pictureResized) ?>" alt="">
										</div>
										<div class="col-sm-7">
											<br>
											<h2><?php echo ff_wp_kses($slider->getText('title')) ?></h2>
											<br>
											<p><?php echo ff_wp_kses($slider->getText('description')) ?></p>
											<?php
											ff_load_section_printer( 'button', $slider );
											?>
										</div>

								</div>
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