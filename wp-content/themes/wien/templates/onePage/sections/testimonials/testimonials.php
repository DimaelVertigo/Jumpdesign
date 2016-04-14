<?php
/**
 * @var ffOptionsQuery $query
 *
 * @link http://milothemes.com/wien/testimonials.html
 */
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'testimonials'
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
		?>
		<div class="row">
			<div class="col-sm-12">
				<div class="testimonial-slider">
					<ul>
						<?php
						foreach ($query->get('testimonials') as $testimonial){
							$photo = $testimonial->getImage('photo');
							$imageUrlResized = fImg::resize($photo->url, 80, 80, true);
							?>
							<li>
								<div class="testimonial style-2">
									<img src="<?php echo esc_url($imageUrlResized); ?>" alt="">

									<h4><?php $testimonial->printText('author'); ?></h4>
									<h6><?php $testimonial->printText('company'); ?></h6>

									<blockquote>
										<p><?php $testimonial->printText('text'); ?></p>
									</blockquote>

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