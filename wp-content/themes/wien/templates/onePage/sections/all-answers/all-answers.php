<?php
/**
* @var ffOptionsQuery $query
*
* @link http://milothemes.com/wien/single-service.html
*/
?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'all-answers'
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
			foreach ($query->get('answers') as $answer) {

				$type = $answer->getVariationType();

				if($type == 'one-image') {
					$bootstrapClasses =  ff_load_section_printer(
						'bootstrap-columns',
						$answer->get('bootstrap-columns')
					);
					$animation = ff_load_section_printer('animation', $answer);
					echo "<div class='" . esc_attr($bootstrapClasses) . "'>";
					$class = "wow " . esc_attr($animation);
					$image = ff_load_section_printer('image', $answer, array('css-class'=>$class));
					echo "</div>";
				}

				else if($type == 'one-box')
				{
					$bootstrapClasses =  ff_load_section_printer(
						'bootstrap-columns',
						$answer->get('bootstrap-columns')
					);
					$animation = ff_load_section_printer('animation', $answer);
					$title = $answer->getText('title');
					$uptitle = $answer->getText('uptitle');
					echo "<div class='" . esc_attr($bootstrapClasses) . "'>";
					if(!empty($uptitle))
					{
						echo "<h6 class='mute'>" . ff_wp_kses($uptitle) . "</h6><br>";
					}
					if(!empty($title))
					{
						echo "<p class='lead wow " . ff_wp_kses($animation) . "'>" . esc_attr($title) . "</p>";
						echo "<p>" . esc_attr($answer->getText('description')) . "</p>";
					} else {
						echo "<p class='wow " . esc_attr($animation) . "'>" . ff_wp_kses($answer->getText('description')) . "</p>";
					}

					echo "</div>";

				} else if($type == 'one-icon') {
					$bootstrapClasses =  ff_load_section_printer(
						'bootstrap-columns',
						$answer->get('bootstrap-columns')
					);
					$animation = ff_load_section_printer('animation', $answer);
					echo "<div class='" . esc_attr($bootstrapClasses) ."'>";
					?>
					<div class="services-boxes style-3 wow <?php echo esc_attr($animation); ?>">
						<i class="<?php echo esc_attr($answer->get('icon')); ?>"></i>
						<div class="services-boxes-content">
							<p><?php echo ff_wp_kses($answer->get('description')); ?></p>
						</div>
					</div>
					<?php
					echo "</div>";
				} else if ($type == 'one-list') {
					$bootstrapClasses =  ff_load_section_printer(
						'bootstrap-columns',
						$answer->get('bootstrap-columns')
					);
					$animation = ff_load_section_printer('animation', $answer);
					echo "<div class='" . esc_attr($bootstrapClasses) ."'>";
					echo "<ul class='bullet-list wow " . esc_attr($animation) . "' data-wow-delay='0.6s'>";
					foreach ($answer->get('lines') as $line) {
						$type = $line->getVariationType();
						if( $type == 'one-field' ) {
							echo "<li>" . ff_wp_kses($line->get('text')) . "</li>";
						}
					}
					echo "</ul>";
					echo "</div>";
				}
			}
			?>
		</div>
	</div>
</section>