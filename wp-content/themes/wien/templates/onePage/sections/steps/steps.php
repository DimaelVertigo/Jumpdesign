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
		'section'=>'steps'
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
		ff_load_section_printer('section-background', $query->get('section-boxed-wrapper background'));
		ff_load_section_printer('heading-wrapped', $query);
		$count = 0;
		foreach ($query->get('facts') as $fact) {
			$count++;
		}
		if($count > 8 or $count < 2){
			echo "Error: Minimal number of steps is 2 and maximal number of steps is 8.";
		} else {
			echo '<div class="row">';
			echo '<div class="col-sm-12">';

			echo '<div class="process-steps process-' . absint($count) . '-steps clearfix">';
			foreach ($query->get('facts') as $fact) {
				$animation = ff_load_section_printer('animation', $fact);
				$icon = $fact->getIcon('icon');

				echo '<div class="step wow ' . esc_attr($animation) . '">';

				echo '<i class="' . esc_attr($icon) . '"></i>';

				echo '<div class="step-details">';

				echo '<h4>' . ff_wp_kses($fact->get('title')) . '</h4>';

				echo '<p>' . ff_wp_kses($fact->get('description')) . '</p>';

				echo '</div>';

				echo '</div>';

			}

			echo '</div>';

			echo '</div>';
			echo '</div>';
		}
		?>
	</div>
</section>
