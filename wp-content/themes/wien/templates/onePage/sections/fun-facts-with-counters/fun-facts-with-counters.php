<?php
/**
* @var ffOptionsQuery $query
*
* @link http://milothemes.com/wien/index.html
*/

wp_enqueue_script('ff-counter');

?><section<?php
ff_load_section_printer(
	'section-fullwidth-wrapper'
	, $query->get('section-fullwidth-wrapper')
	, array(
		'class' => 'clearfix',
		'section'=>'fun-facts-with-counters'
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
			foreach ($query->get('facts') as $fact) {
				$icon = $fact->getIcon('icon');
				$bootstrapClasses =  ff_load_section_printer(
					'bootstrap-columns',
					$fact->get('bootstrap-columns')
				);
				?>
				<div class="<?php echo esc_attr($bootstrapClasses); ?>">
					<div class="counter">
						<i class="<?php echo esc_attr($icon); ?>"></i>
						<div class="counter-value" data-value="<?php $fact->printText('quantity'); ?>"></div>

						<div class="counter-details">
							<p><?php $fact->printText('title'); ?></p>
						</div>

					</div>

				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>
