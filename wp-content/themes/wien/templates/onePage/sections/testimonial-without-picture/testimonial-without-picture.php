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
		'section'=>'testimonial-without-picture'
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
		<?php
		$count = 0;
		foreach ($query->get('testimonials') as $testimonial) {
			$count++;
		}
		?>

		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<?php
				if($count > 1){
					echo "<div class='testimonial-slider'>";
					echo "<ul>";
				}
				?>
				<?php
				foreach ($query->get('testimonials') as $testimonial) {
					if ($count > 1) {
						echo "<li>";
					}
					?>
					<div class="testimonial style-1">

						<blockquote>
							<p><?php echo ff_wp_kses($testimonial->get('text')); ?></p>
						</blockquote>

						<h5><?php echo ff_wp_kses($testimonial->get('author')); ?></h5>
						<h6><?php echo ff_wp_kses($testimonial->get('company')); ?></h6>

					</div>
					<?php
					if ($count > 1) {
						echo "</li>";
					}
				}
				if($count > 1){
					echo "</ul>";
					echo "</div>";
				}
				?>
			</div>
		</div>
	</div>
</section>
