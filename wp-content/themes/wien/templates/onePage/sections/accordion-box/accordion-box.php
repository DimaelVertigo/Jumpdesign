<?php
/**
* @var ffOptionsQuery $query
*
* @link http://milothemes.com/wien/services.html
*/?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'accordion-box'
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
			<?php
			foreach ($query->get('boxes') as $box) {

				$type = $box->getVariationType();

				if ($type == 'one-box') {
					$bootstrapClasses =  ff_load_section_printer(
						'bootstrap-columns',
						$box->get('bootstrap-columns')
					);
					$title = $box->getText('title');
					echo "<div class='" . esc_attr( $bootstrapClasses ) . "'>";
					if (!empty($title)) {
						echo "<p class='lead'>" . ff_wp_kses( $title ) . "</p>";
					}

					echo "<p>" . ff_wp_kses( $box->getText('description') ) . "</p>";

					echo "</div>";

				} else if ($type == 'one-image') {
					$bootstrapClasses =  ff_load_section_printer(
						'bootstrap-columns',
						$box->get('bootstrap-columns')
					);
						echo "<div class='" . esc_attr( $bootstrapClasses ) . "'>";
							echo '<p class="text-center">';
							$bootstrapClasses =  ff_load_section_printer('image', $box);
							echo '</p>';
						echo '</div>';

				} else if ($type == 'one-accordion') {
					$bootstrapClasses =  ff_load_section_printer(
						'bootstrap-columns',
						$box->get('bootstrap-columns')
					);
					echo "<div class='" . esc_attr( $bootstrapClasses ) . "'>";
						echo '<div class="panel-group" id="accordion-1">';

							foreach( $box->get('answer') as $key => $oneAnswer ) {

								$expanded = '';
								$collapse = '';

								if( $oneAnswer->get('is_expanded') ) {
									$expanded = 'aria-expanded="true"';
									$collapse = 'in';
								}
								echo '<div class="panel">';
									echo '<div class="panel-heading">';

										echo '<h4 class="panel-title">';
											echo '<a data-toggle="collapse" data-parent="#accordion-1" href=".ff-collapse-'.esc_attr($key).'" '.esc_attr($expanded).'>'.ff_wp_kses($oneAnswer->get('title')).'</a>';
										echo '</h4>';

									echo '</div>';
									echo '<div class="ff-collapse-'.esc_attr($key).' panel-collapse collapse '.esc_attr($collapse).'">';
										echo '<div class="panel-body">';

											echo '<p>'.ff_wp_kses($oneAnswer->get('text')).'</p>';

										echo '</div>';
									echo '</div>';
								echo '</div>';
							}
						echo '</div>';
					echo '</div>';
				}
			}
			?>
		</div>
	</div>
</section>
